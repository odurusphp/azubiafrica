<?php
    require_once ('../private/initialize.php');
    $sql = "SELECT * FROM companies ORDER BY companyid ASC";
    $companies_data = mysqli_query($db, $sql);
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Companies List</title>
        <meta charset="utf-8" />
    </head>
    <body>
    <div>
            <a href="../index.php">Go to homepage</a>
            <a href="create_companies.php">Add a company</a>
        </div>
        <h2>Companies List</h2>
        <div>
            <!-- List of companies here
            Fetch from DB
             -->
             <table border="1">
                <tr>
                    <th>Company Id</th>
                    <th>Company Name</th>
                    <th>Telephone</th>
                    <th>Email</th>
                    <th>Country</th>
                    <th>Address</th>
                </tr>

                <?php
                    while ($user = mysqli_fetch_assoc($companies_data)) { ?>
                      <tr>
                          <td><?php echo $user['companyid']; ?></td>
                          <td><?php echo $user['companyname']; ?></td>
                          <td><?php echo $user['telephone']; ?></td>
                          <td><?php echo $user['email']; ?></td>
                          <td><?php echo $user['country']; ?></td>
                          <td><?php echo $user['address']; ?></td>
                      </tr>  
                <?php }
                ?>
             </table>
        </div>
        <?php
            mysqli_free_result($companies_data);
            db_close($db);
        ?>
    </body>
</html>