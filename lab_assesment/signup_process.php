<?php
$fnameErr = $lnameErr = $emailErr = $passwordErr = $contactErr = "";
$fname = $lname = $email = $password = $contact = "";
$error = "";

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "demo";

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["fname"])) {
        $fnameErr = "First name is required";
    } else {
        $fname = cleanInput($_POST["fname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $fname)) {
            $fnameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["lname"])) {
        $lnameErr = "Last name is required";
    } else {
        $lname = cleanInput($_POST["lname"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $lname)) {
            $lnameErr = "Only letters and white space allowed";
        }
    }

    if (!empty($_POST["contact"])) {
        $contact = cleanInput($_POST["contact"]);
        if (!preg_match("/^[0-9]*$/", $contact)) {
            $contactErr = "Contact must be only numbers";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = cleanInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = trim($_POST["password"]);
        if (strlen($password) < 8) {
            $passwordErr = "Password must be at least 8 characters";
        }
    }

    if ($fnameErr === "" && $lnameErr === "" && $emailErr === "" && $passwordErr === "" && $contactErr === "") {

        $stmt = mysqli_prepare(
            $conn,
            "INSERT INTO admin (first_name, last_name, contact, email, password)
             VALUES (?, ?, ?, ?, ?)"
        );

        mysqli_stmt_bind_param($stmt, "sssss", $fname, $lname, $contact, $email, $password);

        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header("Location: login.php");
            exit();
        } else {
            $error = "Could not add record: " . mysqli_stmt_error($stmt);
        }

        mysqli_stmt_close($stmt);
    }

    mysqli_close($conn);
}
?>