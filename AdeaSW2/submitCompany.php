<?php



include('connectDb.php');

if (isset($_POST["submit"])){

$companyname = $_POST['companyname'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$address = $_POST['address'];
$country = $_POST['country'];


$sql = "INSERT INTO company (companyname, email, telephone,country, address) 
VALUES ('$companyname', '$email', '$telephone', '$country', '$address')" ;
 
 if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute" . " " .$sql;
}
}
?>