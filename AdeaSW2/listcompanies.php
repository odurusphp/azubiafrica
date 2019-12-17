<?php 

$mysqli= new mysqli('localhost','root','','azubi');
if($mysqli->connect_errno){
    echo"cannot connect MYSQLI error no{$mysqli->connect_errno}:{$mysqli->connect_errno}";
    exit();
}

$companylist = $mysqli->query('SELECT * FROM company');
?>

<table border = 3>
<tr>
<td>Company name</td>
<td>Telephone</td>
<td>Email</td>
<td>Country</td>
<td>Address</td>
</tr>
<?php

while ($row = $companylist->fetch_assoc()) { ?>
<tr>
<td>
<?php echo $row['companyname'] ?>
</td>
<td><?php echo $row['telephone'] ?></td>
<td><?php echo $row['country'] ?></td>
<td><?php echo $row['address'] ?></td>
<td><?php echo $row['email'] ?></td>
</tr>
<?php } ?>
</table>
  
