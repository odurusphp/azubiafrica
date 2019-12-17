<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Company Submit</title>
  </head>
  <body>
    <?php
      include_once 'dbConfig.php';

      $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

      // Check connection
      if($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
      }
      ?>
        <a href="index.php">Main Menu</a>
      <?php
      
      // Collecting form data into vars.
      $company_name = $_POST['companyname'];
      $telephone = $_POST['telephone'];
      $email = $_POST['email'];
      $country = $_POST['country'];
      $address = $_POST['address'];

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
