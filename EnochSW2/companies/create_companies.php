<?php
require_once ('../private/initialize.php');
        if(isset($_POST['submit'])){
            $companyname = $_POST['companyname'];
            $telephone = $_POST['telephone'];
            $email = $_POST['email'];
            $country = $_POST['country'];
            $address = $_POST['address'];

            $sql = "INSERT INTO companies ";
        $sql .= "(companyname, telephone, email, country, address) ";
        $sql .= "VALUES (";
        
        $sql .= "'" . $companyname ."',";
        $sql .= "'" . $telephone ."',";
        $sql .= "'" . $email ."',";
        $sql .= "'" . $country ."',";
        $sql .= "'" . $address ."'";
        $sql .= ")";

        $result = mysqli_query($db, $sql);

        if($result){
            header('Location: '. 'companies_list.php');
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
        <title>Companies Page</title>
        <meta charset="utf-8" />
    </head>
    <body>
    <div>
            <a href="../index.php">Go to homepage</a>
            <a href="companies_list.php">List of Companies</a>
        </div>
        <h2>Companies</h2>
        <form method="POST" action="">
            <div>
                <label for="companyname">Company Name</label>
                <input type="text" name="companyname" id="companyname" value="" autocomplete=false>
            </div>

            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="" autocomplete=false>
            </div>
            
            <div>
                <label for="telephone">Telephone</label>
                <input type="text" name="telephone" id="telephone" value="" autocomplete=false>
            </div>

            <div>
                <label for="country">Country</label>
                <input type="text" name="country" id="country" value="" autocomplete=false>
            </div>

            <div>
                <label for="address">Address</label>
                <textarea name="address" id="address" cols="30" rows="10"></textarea>
            </div>

            <div>
                <input type="submit" name="submit" id="submit" value="Save">
            </div>
            
        </form>
        
    </body>
   
</html>

