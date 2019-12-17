<?php 

include ('conn.php');

if (isset($_POST['savecompany']))
{	 

	 $companyname = $_POST['companyname'];
	 $email = $_POST['email'];
     $telephone = $_POST['telephone'];
     $country = $_POST['country'];
     $address = $_POST['address'];
     
	 $sql = "INSERT INTO `companies`
     (`companyname`,
      `telephone`,
      `email`,
      `country`,
      `address`)
VALUES ('$companyname',
 '$telephone',
 '$email',
 '$country',
 '$address')";


	 if (mysqli_query($conn, $sql)) {
		echo "New company added successfully !";
	 } else {

		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}



?>
<br/>
<a href="company.php">
GO BACK
</a>
<br/>
<a href="listcompany.php">
GET LIST
</a>