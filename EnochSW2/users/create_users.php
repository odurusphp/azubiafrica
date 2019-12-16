<?php
require_once ('../private/initialize.php');

    if(isset($_POST['submit'])){
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO users ";
        $sql .= "(firstname, lastname, email, password) ";
        $sql .= "VALUES (";
        
        $sql .= "'" . $firstname ."',";
        $sql .= "'" . $lastname ."',";
        $sql .= "'" . $email ."',";
        $sql .= "'" . $password ."'";
        $sql .= ")";

        $result = mysqli_query($db, $sql);

        if($result){
            header('Location: '. 'users_list.php');
        }
        else{
            echo mysqli_error($db);
            db_close($db);
            exit();
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Users Page</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <div>
            <a href="../index.php">Go to homepage</a>
            <a href="users_list.php">List of Users</a>
        </div>
        <h2>Users</h2>
        <form method="POST" action="">
            <div>
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" id="firstname" value="" autocomplete=false>
            </div>

            <div>
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname" id="lastname" value="" autocomplete=false>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="" autocomplete=false>
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" value="" autocomplete=false>
            </div>

            <div>
                <input type="submit" name="submit" id="submit" value="Save">
            </div>
            
        </form>
        
    </body>
</html>