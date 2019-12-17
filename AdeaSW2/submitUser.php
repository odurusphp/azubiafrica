<?php

include('connectDb.php');

if (isset($_POST["submit"])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO users (firstname, lastname, email, password) 
VALUES ('$firstname', '$lastname', '$email', '$password')" ;
 
 if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute" . $sql;
}
}
?>