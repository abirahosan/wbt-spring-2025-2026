<?php
$usernameErr = $passwordErr = $loginErr = "";
$username = $password = "";
$loginSuccess = false;

// ---------- Database connection ----------
$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "";          // XAMPP's default MySQL password is empty
$DB_NAME = "demo";      // Updated database name

$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = cleanInput($_POST["username"]);
        if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
            $usernameErr = "Only letters, numbers, and underscores allowed";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"]; 
    }

    if (empty($usernameErr) && empty($passwordErr)) {
        $stmt = mysqli_prepare(
            $conn,
            "SELECT id FROM admin WHERE email = ? AND password = ?"
        );
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) === 1) {
            $loginSuccess = true;
            header("Location: crud.php");
            exit();
        } else {
            $loginErr = "Incorrect username or password.";
        }
        mysqli_stmt_close($stmt);
    }
}
mysqli_close($conn);
?>