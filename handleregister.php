<?php
session_start();
include "../core/functions.php";
include "../core/validate.php";
$errors = [];

if (checkRequestMethod('POST') && checkrequestkey('name')) {
    // $name = sanitizeINputs($_POST['name']);
    // $email = sanitizeINputs($_POST['email']);
    // $password = sanitizeINputs($_POST['password']);

    foreach ($_POST as $key => $value) {
        $$key = sanitizeINputs($value);
    }
    // name 
    if (requiredval($name)) {
        $errors[] = "Name is required";
    } else if (minval($name, 5)) {
        $errors[] = "The minimum value for name is 5 charcters";
    } elseif (maxval($name, 25)) {
        $errors[] = "The maximum value for name is 25 chars";
    } else if (requiredval($email)) {
        $errors[] = "Email is required";
    } else if (!emailval($email)) {
        $errors[] = "Email is not valid";
    } else if (minval($email, 5)) {
        $errors[] = "The minimum value is 5 charcters";
    } elseif (maxval($email, 25)) {
        $errors[] = "The maximum value for email is 25 chars";
    } else if (requiredval($password)) {
        $errors[] = "Password is required";
    } else if (minval($password, 7)) {
        $errors[] = "Password at least must be 7 characters";
    } else if (maxval($password, 25)) {
        $errors[] = "Password can't be more than 25 characters";
    }
    if (empty($errors)) {
        $users_file = fopen("../data/user.csv", "a+");
        $data =
            [
                $name,
                $email,
                sha1($password)
            ];
        fputcsv($users_file, $data);
        $_SESSION['auth'] = [$name, $email];
        header("location:../index.php");
        die();
    } else {
        $_SESSION['errors'] = $errors;
        header("location:../register.php");
    }
} else {
    echo "we support post method only ";
}
