<?php
function requiredval($input)
{
    if (empty($input)) {
        return true;
    } else
        return false;
}
function emailval($input)
{
    if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else
        return false;
}

function minval($input,$length)
{

if(strlen($input)<$length)
{

        return true;
    } else
        return false;

}

function maxval($input,$length)
{

if(strlen($input)>$length)
{

        return true;
    } else
        return false;

}



