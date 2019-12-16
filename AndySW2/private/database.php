<?php
require_once('db_credentials.php');

/**
 * This is to get database
 * connection string for use
 * 
 * @return $connection
 */
function Db_connect()
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    confirm_db_connect();
    return $connection;
}

/**
 * This is to disconnect connection
 * from the database
 * 
 * @return void
 */
function Db_disconnect($connection)
{
    if (isset($connection)) {
        mysqli_close($connection);
    }
}

/**
 * This is to check to database
 * connection errors.
 * 
 * @return $msg;
 */
function confirm_db_connect()
{
    if (mysqli_connect_errno()) {
        $msg = "Database connection faile";
        $msg .= mysqli_connect_errno();
        $msg .= " (" . mysqli_connect_errno() . ")";
        exit($msg);
    }
}

/**
 * This is to confirm
 * database query return result
 * 
 * @return $errormsg;
 */
function confirm_query($result)
{
    if (!$result) {
        exit("Database query failed");
    }
}

?>