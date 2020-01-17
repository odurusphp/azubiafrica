<?php require_once('../private/initialize.php'); ?>


<?php $page_title = 'Welcome'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

    <body>
        <ul>
            <li><a href="<?php echo url_for('/user/index.php'); ?>"><h1>Users</h1></a></li>
            <li><a href="<?php echo url_for('/company/index.php'); ?>"><h1>Companies</h1></li>
        </ul> 
   
    </body>
</html>