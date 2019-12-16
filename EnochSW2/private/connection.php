<?php
require_once ('credentials.php');

function db_open(){
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME, DB_PORT);
    return $conn;
}

function db_close($db_connection){
    if(isset($db_connection)){
        $db_connection = null;
    }
}

?>