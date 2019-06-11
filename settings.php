<?php include_once "./includes/header.php" ?>
<?php include "./includes/settings_form.php" ?>
<?php include "./includes/output.php" ?>

<?php
if (isset($_POST['submit'])) {
    $db_name = $_POST['db_name'];
    $server_name = $_POST['server_name'];
    $user_name = $_POST['user_name'];
    $user_password = $_POST['user_password'];

    if (!empty($db_name) && !empty($server_name) && !empty($user_name) && !empty($user_password)) {
        //Set user data from form to cookies
        setcookie('db_connection', serialize(array(
            "db_name" => $db_name,
            "server_name" => $server_name,
            "user_name" => $user_name,
            "user_password" => $user_password
        )));
    }
}
?>

<!-- MAIN -->
<main class="main">
    <div class="container">
        <?php echo settings_form("POST", "Отправить") ?>
    </div>
</main>
<!-- MAIN -->

<?php include_once "./includes/footer.php" ?>