<?php
include ('conn.php');

$result = mysqli_query($conn,"SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Get Users</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table border="1">
  
  <tr>
    <td>No.</td>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Email</td>
  </tr>
<?php
$counter = 1;
while($row = mysqli_fetch_array($result)) {

?>
<tr>
    <td><?php echo $counter; ?></td>
    <td><?php echo $row["firstname"]; ?></td>
    <td><?php echo $row["lastname"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
</tr>
<?php
$counter ++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
 </body>
</html>