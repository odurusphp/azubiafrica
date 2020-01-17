<?php

require_once('../../private/initialize.php');

if(is_post_request()) {

  // Handle form values sent by new.php

  $companyname = isset($_POST['companyname']) ? $_POST['companyname'] : '';
  $telephone = isset($_POST['telephone']) ? $_POST['telephone'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $country = isset($_POST['country']) ? $_POST['country'] : '';
  $address = isset($_POST['address']) ? $_POST['address'] : '';


  $sql = "INSERT INTO companies ";
  $sql .= "(companyname, telephone, email, country, address) ";
  $sql .= "VALUES (";
  $sql .= "'" . $companyname . "',";
  $sql .= "'" . $telephone . "',";
  $sql .= "'" . $email . "',";
  $sql .= "'" . $country . "',";
  $sql .= "'" . $address . "'";
  $sql .= ")";
  $result = mysqli_query($db, $sql);
// for INSERT statements, $result is true/false
if($result) {
    $new_id = mysqli_insert_id($db);
    redirect_to(url_for('/company/list.php'));
} else {
    // INSERT failed
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
}

} else {
  redirect_to(url_for('/company/list.php'));
}

?>