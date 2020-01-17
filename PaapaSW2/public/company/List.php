<?php require_once('../../private/initialize.php'); ?>


<?php

  $company_set = find_all_companies();

?>

<?php $page_title = 'List'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<a  href="<?php echo url_for('/company/index.php'); ?>">&laquo; Back</a>


<div>
    <h1 >Companies</h1>

  	<table style="width:80%">
  <tr>
    <th>companyid</th>
    <th>companyname</th>
    <th>telephone</th> 
    <th>email</th>
    <th>country</th>
    <th>address</th>
  </tr>
 
  
  <?php while($company = mysqli_fetch_assoc($company_set)) { ?>
        <tr>
          <td><?php echo h($company['companyid']); ?></td>
          <td><?php echo h($company['companyname']); ?></td>
          <td><?php echo h($company['telephone']); ?></td>
          <td><?php echo h($company['email']); ?></td>
          <td><?php echo h($company['country']); ?></td>
          <td><?php echo h($company['address']); ?></td>
        </tr>
        <?php } ?>
    </table>

    <?php
    mysqli_free_result($company_set);
    ?> 

  </div>

<?php include(SHARED_PATH . '/footer.php'); ?>
