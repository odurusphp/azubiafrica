<?php

/**
 * This is to redirect to a new page
 *  
 * @return void
 */
function redirect_to($location)
{
    header("Location : " . $location);
    exit;
}

/**
 * This is to check is a request
 * is a POST request
 * 
 * @return boolean
 */
function is_get_request()
{
    return $_SERVER['REQUEST_METHOD'] == 'GET';
}

/**
 * This is to check is a request
 * is a GET request
 * 
 * @return boolean
 */
function is_post_request()
{
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

/**
 * This is to get the full url
 * of a given path.
 * This is to avoid path breakage
 * 
 * @return $path
 */
function url_for($path)
{
    if ($path[0] != '/') {
        $path = "/" . $path;
    }
    return WWW_ROOT . $path;
}

/**
 * This function is to escape special
 * characters submitted to it to prevent
 * sql injections
 * 
 * @return $escapedCharacters
 */
function escape_char($string = "")
{
    return htmlspecialchars($string);
}
