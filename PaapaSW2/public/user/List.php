<?php require_once('../../private/initialize.php'); ?>


<?php

  $user_set = find_all_users();

?>

<?php $page_title = 'List'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<a  href="<?php echo url_for('/user/index.php'); ?>">&laquo; Back</a>
<br>

<div>
    <h1 >Users</h1>

  

  	<table style="width:80%">
  <tr>
    <th>userId</th>
    <th>firstname</th>
    <th>lastname</th> 
    <th>email</th>
    <th>password</th>
  </tr>
 
  
  <?php while($user = mysqli_fetch_assoc($user_set)) { ?>
        <tr>
          <td><?php echo h($user['userid']); ?></td>
          <td><?php echo h($user['firstname']); ?></td>
          <td><?php echo h($user['lastname']); ?></td>
          <td><?php echo h($user['email']); ?></td>
          <td><?php echo h($user['password']); ?></td>
        </tr>
        <?php } ?>
    </table>

    <?php
    mysqli_free_result($user_set);
    ?> 

  </div>

<?php include(SHARED_PATH . '/footer.php'); ?>
