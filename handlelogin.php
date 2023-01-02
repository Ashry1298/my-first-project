<?php
session_start();
$errors = [];
include "../core/functions.php";
include "../core/validate.php";
if (checkRequestMethod('POST') && checkrequestkey('email')) {
    $email1 = $_POST['email'];
    $password1 = $_POST['password'];
    // foreach ($_POST as $key => $value) {
    //     $$key = sanitizeINputs($value);
    // }
    // Email 
    if (requiredval($email1)) {
        $errors[] = "Email is required";
    } else if (!emailval($email1)) {
        $errors[] = "Email is not valid";
    } elseif (maxval($email1, 25)) {
        $errors[] = "The maximum value for email is 25 chars";
    } else if (requiredval($password1)) {
        $errors[] = "Password is required";
    } else if (minval($password1, 6)) {
        $errors[] = "Password at least must be 6 characters";
    } else if (maxval($password1, 25)) {
        $errors[] = "Password can't be more than 25 characters";
    }
    $password1 = sha1($password1);
    $file = explode("PHP_EOL", file_get_contents("../data/user.csv"));
    foreach ($file as $line) {
        list($name, $email, $password) = explode(",", $line);
    }
    // $passwordVerification = password_verify($password1, $password);
    if ($email1 == $email) {
        if ($passwordVerification) {
            echo "You are successfully logged in";
        } else {
            $errors[] = "invalid password";
            header("location:../login.php");
        }
    } else {
        $errors[] = "invalid Email ";
    }
    // $password = sha1($password);
    if (empty($errors)) {
        $_SESSION['auth'] = [$name, $email];
        header("location:../index.php");
    } else {
        $_SESSION["errors"] = $errors;
        header("location:../login.php");
        die();
    }
} else {
    echo "Only Post Method Is Supported";
}
