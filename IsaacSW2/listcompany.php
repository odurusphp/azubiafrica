<?php
include ('conn.php');

$result = mysqli_query($conn,"SELECT * FROM companies");
?>
<!DOCTYPE html>
<html>
 <head>
 <title>Get Companies</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
  <table border="1">
  
  <tr>
    <td>No.</td>
    <td>Company Name</td>
    <td>Telephone</td>
    <td>Email</td>
    <td>Address</td>
  </tr>
<?php
$counter = 1;
while($row = mysqli_fetch_array($result)) {

?>
<tr>
    <td><?php echo $counter; ?></td>
    <td><?php echo $row["companyname"]; ?></td>
    <td><?php echo $row["telephone"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
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