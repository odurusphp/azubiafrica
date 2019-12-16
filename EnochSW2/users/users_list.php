<?php
require_once ('../private/initialize.php');
$sql = "SELECT * FROM users ORDER BY userid DESC";
$users_data = mysqli_query($db, $sql);
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Users List</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <div>
            <a href="../index.php">Go to homepage</a>
            <a href="create_users.php">Add a user</a>
        </div>
        <h2>Users List</h2>
        <div>
            <!-- List of users here
            Fetch from DB
             --->

             <table border="1">
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                </tr>

                <?php
                    while ($user = mysqli_fetch_assoc($users_data)) { ?>
                      <tr>
                          <td><?php echo $user['userid']; ?></td>
                          <td><?php echo $user['firstname']; ?></td>
                          <td><?php echo $user['lastname']; ?></td>
                          <td><?php echo $user['email']; ?></td>
                      </tr>  
                <?php }
                ?>
             </table>
        </div>
        <?php
            mysqli_free_result($users_data);
            db_close($db);
        ?>
    </body>
</html>