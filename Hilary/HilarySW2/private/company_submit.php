<?php
  include_once('initialize.php');
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Company Submit</title>
  </head>
  <body>
      <a href="../index.php">Main Menu</a>
      <?php
      // $conn = create_db_conn();
      // Collecting form data into vars.
      $company_name = h($_POST['companyname']);
      $telephone = h($_POST['telephone']);
      $email = h($_POST['email']);
      $country = h($_POST['country']);
      $address = h($_POST['address']);

      // Attempt insert
      $sql_statement = "INSERT INTO companies (companyname, telephone, email, country, address) VALUES
      ('$company_name', '$telephone', '$email', '$country', '$address')";

      if(mysqli_query($conn, $sql_statement)) {
        echo "<h1>You've successfully created a company!!!</h1>";
      } else {
        echo "<h1>There was an error creating your company:(.</h1>";
      }

      mysqli_close($conn);
     ?>
  </body>
</html>
