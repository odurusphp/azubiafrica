<?php
require_once('../../private/initialize.php');
include_once(SHARED_PATH . '/header.php');

if (is_get_request()) {

    $result = find_all_companies();
}
?>

<body>

    
    <h3>List of all companies</h3>

    <!-- Table -->
    <table style="width: 100%;" border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Country</th>
                <th>Address</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($company = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo (escape_char($company["companyid"])); ?></td>
                    <td><?php echo (escape_char($company["companyname"])); ?></td>
                    <td><?php echo (escape_char($company["email"])); ?></td>
                    <td><?php echo (escape_char($company["telephone"])); ?></td>
                    <td><?php echo (escape_char($company["country"])); ?></td>
                    <td><?php echo (escape_char($company["address"])); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>


</body>

<?php include_once(SHARED_PATH . '/footer.php'); ?>