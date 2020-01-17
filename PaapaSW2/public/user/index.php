<?php

require_once('../../private/initialize.php');

?>


<?php $page_title = 'Companies Page'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

  <div id="content">

    <div class="subject new">
      <h1>USER</h1>

      <form action="<?php echo url_for('/user/create.php'); ?>" method="post">
        <fieldset>
          <legend><strong>User information:</strong></legend><br>
          First name:<br>
          <input type="text" name="firstname" value="">
          <br>
          Last name:<br>
          <input type="text" name="lastname" value="">
          <br> 
          Email:<br>
          <input type="text" name="email" value="">
          <br> 
          Password:<br>
          <input type="text" name="password" value="">
          <br><br>
          <input type="submit" value="Submit">
        </fieldset>
      </form>

    </div>

  </div>
  <br>

  <a class="back-link" href="<?php echo url_for('/index.php'); ?>">&laquo; Back</a>
  <a  style="margin-left:2.5em" href="<?php echo url_for('/user/list.php'); ?>">List</a>
  
  <?php include(SHARED_PATH . '/footer.php'); ?>