<?php
  include_once('../private/dbConfig.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <a href="../public/index.php">Main Menu</a><br><br>
      <b>User List</b>

      <?php

      $sql_statement = "SELECT firstname, lastname FROM users";
      $result = mysqli_query($conn, $sql_statement);
      $resultCheck = mysqli_num_rows($result);
      ?>
      <ul>
      <?php
      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)){
          echo "<li>" . $row['lastname'] . ", " . $row['firstname'] . "</li>";
        }
      }
      ?>
      </ul>
  </body>
</html>
