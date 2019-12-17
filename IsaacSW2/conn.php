<?php
$hostname='localhost:3308';
$username='root';
$password='root';
$dbname = "azubi";
$conn=mysqli_connect($hostname,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
?>