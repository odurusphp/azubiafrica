<?php
  include_once 'dbConfig.php';

  ?>
    <a href="index.php">Main Menu</a>
  <?php
  // $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
  //
  // // Check connection
  // if($conn === false) {
  //   die("ERROR: Could not connect. " . mysqli_connect_error());
  // }

  // Collect data into vars
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Attempt to insert data
  $sql_statement = "INSERT INTO users (firstname, lastname, email, password)
  VALUES
  ('$fname', '$lname', '$email', '$password')";
  if(mysqli_query($conn, $sql_statement)) {
    echo "<h1>You've successfully created a user!!!</h1>";
  } else {
    echo "<h1>There was an error creating your user:(.</h1>";
  }
  // mysqli_query($conn, $sql_statement);

  // close the connection
  mysqli_close($conn);
?>

<?php // TODO: Include link to view all users ?>
<?php // TODO: Include link to view all companies ?>
