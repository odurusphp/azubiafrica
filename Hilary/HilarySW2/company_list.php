<?php
  include_once 'dbConfig.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <a href="index.php">Main Menu</a><br><br>
      <b>Companies</b>
      <?php

      $sql_statement = "SELECT companyname FROM companies";
      $result = mysqli_query($conn, $sql_statement);
      $resultCheck = mysqli_num_rows($result);
      ?>

      <?php
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
          echo "<li>" . $row['companyname'] . "</li>";
        }
      }
      ?>
    </ul>
  </body>
</html>
