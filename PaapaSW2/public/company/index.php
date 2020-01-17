<?php

require_once('../../private/initialize.php');

?>


<?php $page_title = 'Companies Page'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

  
      <h1> Second Page </h1>

      <form action="<?php echo url_for('/company/create.php'); ?>" method="post">
        <fieldset>
          <legend><strong>Company information:</strong></legend><br>
          Company name:<br>
          <input type="text" name="companyname" value="">
          <br>
          Telephone:<br>
          <input type="text" name="telephone" value="">
          <br> 
          email:<br>
          <input type="text" name="email" value="">
          <br> 
          Country:<br>
          <input type="text" name="country" value="">
          <br>
          Address:<br>
          <input type="text" name="address" value="">
          <br><br>
          <input type="submit" value="Submit">
        </fieldset>
      </form>
  <br>

  <a  href="<?php echo url_for('/index.php'); ?>">&laquo; Back</a>
  <a  style="margin-left:2.5em" href="<?php echo url_for('/company/list.php'); ?>">List</a>
  


<?php include(SHARED_PATH . '/footer.php'); ?>