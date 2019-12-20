<?php
  include(__DIR__ . '/dbConfig.php');

  function u($string="") {
    return urlencode($string);
  }

  function raw_u($string="") {
    return rawurlencode($string);
  }

  function h($string="") {
    return htmlspecialchars($string);
  }

  // function create_db_conn() {
  //   // Create connection
  //   $conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
  //   // Check connection
  //   if($conn === false) {
  //     die("ERROR: Could not connect. " . mysqli_connect_error());
  //   }
  //   return $conn;
  // }
 ?>
