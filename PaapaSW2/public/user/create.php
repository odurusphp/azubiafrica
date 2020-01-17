<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php

  $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
  $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';

  $sql = "INSERT INTO users ";
  $sql .= "(firstname, lastname, email, password) ";
  $sql .= "VALUES (";
  $sql .= "'" . $firstname . "',";
  $sql .= "'" . $lastname . "',";
  $sql .= "'" . $email . "',";
  $sql .= "'" . $password . "'";
  $sql .= ")";
  $result = mysqli_query($db, $sql);
// for INSERT statements, $result is true/false
if($result) {
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('/user/list.php'));
} else {
    // INSERT failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
}

} else {
  redirect_to(url_for('/user/list.php'));
}

?>