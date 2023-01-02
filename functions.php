<?php

// function checkRequestMethod($method)
// {

//     if ($_SERVER['REQUEST_METHOD'] == $method) {
//         return true;
//     } else {
//         return false;
//     }
// }
function checkRequestMethod($method)
{
    if ($_SERVER['REQUEST_METHOD'] == $method) {
        return true;
    } else
        return false;
}
function checkrequestkey($key)
{

    if (isset($_POST[$key])) {
        return true;
    } else {
        return false;
    }
}

// function checkPostInput($input)
// {

//     if (isset($_POST[$input])) {
//         return true;
//     } else {
//         return false;
//     }
// }
function sanitizeINputs($input)
{
    return trim(htmlspecialchars(htmlentities($input)));
}

// function sanitizeINputs($input)
// {

//   return trim(htmlspecialchars(htmlentities($input)));
// }

function redirect($input)
{
    header("location:path");
}
// function checkPasswordLogin($key1,$key2)
// {  

//     if ($_POST['email'] == $key1 || sha1($_POST['password'] == $key2) {

//         return true;
//     }else
//     return false;
// }
