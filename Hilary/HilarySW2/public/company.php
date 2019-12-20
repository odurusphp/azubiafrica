<?php include('../private/initialize.php') ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Companies</title>
  </head>
  <body>
    <h1>Company Info</h1>
    <div class="">
      <form class="" action="../private/company_submit.php" method="post">
        <b>Company Name</b>: <br>
        <input type="text" name="companyname" value=""><br>
        <b>Telephone</b>: <br>
        <input type="text" name="telephone" value=""/><br>
        <b>E-mail</b>: <br>
        <input type="email" name="email" value=""/><br>
        <b>Country</b>: <br>
        <input type="text" name="country" value=""/><br>
        <b>Address</b>: <br>
        <input type="text" name="address" value=""/><br><br>
        <input type="submit" value="Submit">
      </form>
    </div>
  </body>
</html>
