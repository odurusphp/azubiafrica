<?php 

include ('conn.php');

if (isset($_POST['saveuser']))
{	 

	 $firstname = $_POST['firstname'];
	 $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $password = md5($_POST['password']);
     $email = $_POST['email'];
     
	 $sql = "INSERT INTO `users`
     (`firstname`,
      `lastname`,
      `email`,
      `password`)
      VALUES 
    ('$firstname',
    '$lastname',
    '$email',
    '$password')";


	 if (mysqli_query($conn, $sql)) {
		echo "New record added successfully !";
	 } else {

		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}



?>

<br/>
<a href="users.php">
GO BACK
</a>
<br/>
<a href="listusers.php">
GET LIST
</a>