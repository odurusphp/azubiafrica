<?php 

$mysqli= new mysqli('localhost','root','','azubi');
if($mysqli->connect_errno){
    echo"cannot connect MYSQLI error no{$mysqli->connect_errno}:{$mysqli->connect_errno}";
    exit();
}

$userslist = $mysqli->query('SELECT * FROM users');
?>
<table border=3>
<tr>
<td>First name</td>
<td>Last name</td>
<td>Email</td>
</tr>
<?php

while ($row = $userslist->fetch_assoc()) { ?>
<tr>
<td>
<?php echo $row['firstname'] ?>
</td>
<td><?php echo $row['lastname'] ?></td>
<td><?php echo $row['email'] ?></td>
</tr>
<?php } ?>
</table>
  
