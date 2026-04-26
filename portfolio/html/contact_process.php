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


    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = cleanInput($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }


    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = cleanInput($_POST["gender"]);
    }


    $company = cleanInput($_POST["company"] ?? "");


    $reason = cleanInput($_POST["reason"] ?? "");


    if (!empty($_POST["topic"]) && is_array($_POST["topic"])) {
        $topic = array_map('cleanInput', $_POST["topic"]);
    }
}
?>