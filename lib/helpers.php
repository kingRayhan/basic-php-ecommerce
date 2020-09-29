<?php
/**
 * Created at: 8:03 AM
 * File: helpers.php
 */

/**
 * Get Application root url
 * @return string
 */
function root_url()
{
    return (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
}


function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function session_user()
{
    if (!empty($_SESSION['user'])) {
        return $_SESSION['user'];
    }
    return false;
}