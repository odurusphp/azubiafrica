<?php
require_once('../../private/initialize.php');
include_once(SHARED_PATH . '/header.php');

if (is_post_request()) {
    $firstName = escape_char($_POST['firstName']);
    $lastName = escape_char($_POST['lastName']);
    $email = escape_char($_POST['email']);
    $password = escape_char($_POST['password']);

    $result = insert_user($firstName, $lastName, $password, $email);

    if ($result) {
        echo ("User created successfully");
    }
}
?>


<h2>Register</h2>


<!-- Table -->
<table class="table" style="width: 100%">
    <form action="<?php url_for('users/create.php') ?>" method="POST">
        <tbody>
            <tr>
                <td>First Name</td>
                <td>
                    <input type="text" name="firstName" />
                </td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>
                    <input type="text" name="lastName" />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" />
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" />
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

<?php include_once(SHARED_PATH . '/footer.php'); ?>