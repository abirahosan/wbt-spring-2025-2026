<?php
$usernameErr = $passwordErr = $loginErr = "";
$username = $password = "";
$loginSuccess = false;

function cleanInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = cleanInput($_POST["username"]);
        if (!preg_match("/^[a-zA-Z0-9_]*$/", $username)) {
            $usernameErr = "Only letters, numbers, and underscores allowed";
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"]; 
    }

    if (empty($usernameErr) && empty($passwordErr)) {
        if ($username == "noman" && $password == "12345") {
            $loginSuccess = true;
        } else {
            $loginErr = "Incorrect username or password.";
        }
    }
}