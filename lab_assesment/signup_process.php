<?php
$fnameErr = $lnameErr = $emailErr = $genderErr = "";

$fname = $lname = $email = $company = $reason = $gender = "";
$topic = [];

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

    if (empty($_POST["contact"])) {
        
    } else {
        $contact = cleanInput($_POST["contact"]);
        if (!preg_match("/^[0-9.  ]*$/", $contact)) {
            $contactErr = "contuct must be only numbers";
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
        $passwordErr = "password is required";
    } else {
        $password = cleanInput($_POST["password"]);
        if (strlen($password)<8) {
            $passwordErr = "password must be 8 char long";
        }
    }


    



}
?>