<?php


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


function sanitizeINputs($input)
{
    return trim(htmlspecialchars(htmlentities($input)));
}


function redirect($input)
{
    header("location:path");
}
