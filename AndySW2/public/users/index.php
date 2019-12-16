<?php
require_once('../../private/initialize.php');
include_once(SHARED_PATH . '/header.php');

if (is_get_request()) {

    $result = find_all_users();
}
?>

    <h3>List of all users</h3>
    <!-- Table -->
    <table style="width: 100%;" border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($company = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo (escape_char($company["userid"])); ?></td>
                    <td><?php echo (escape_char($company["firstname"])); ?></td>
                    <td><?php echo (escape_char($company["lastname"])); ?></td>
                    <td><?php echo (escape_char($company["email"])); ?></td>
                    <td><?php echo (escape_char($company["password"])); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


<?php include_once(SHARED_PATH . '/footer.php'); ?>