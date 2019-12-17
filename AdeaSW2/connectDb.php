<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "azubi";
// Create connection
$link = new mysqli($servername, $username, $password, "$dbname");
// Check connection
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
echo "Connected successfully";
?>