<?php
require_once('../../private/initialize.php');
include_once(SHARED_PATH . '/header.php');

if (is_post_request()) {
    $companyName = escape_char($_POST['companyName']);
    $email = escape_char($_POST['email']);
    $telephone = escape_char($_POST['telephone']);
    $country = escape_char($_POST['country']);
    $address = escape_char($_POST['address']);

    $result = insert_company($companyName, $telephone, $email, $country, $address);

    if ($result) {
        echo ("Company inserted successfully");
    }
}
?>


<h2>Profil Info</h2>

<!-- Table -->
<table class="table" style="width: 100%">
    <form action="<?php url_for('/public/company/create.php') ?>" method="POST">
        <tbody>
            <tr>
                <td>Company Name</td>
                <td>
                    <input type="text" name="companyName" />
                </td>
            </tr>

            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" />
                </td>
            </tr>
            <tr>
                <td>Telephone</td>
                <td>
                    <input type="text" name="telephone" />
                </td>
            </tr>
            <tr>
                <td>Country</td>
                <td>
                    <input type="text" name="country" />
                </td>
            </tr>
            <tr>
                <td>Address</td>
                <td>
                    <input type="text" name="address" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Submit" />
                </td>
            </tr>
        </tbody>
    </form>
</table>

<script src="" async defer></script>
</body>

<?php include_once(SHARED_PATH . '/footer.php'); ?>