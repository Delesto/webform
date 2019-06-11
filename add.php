<?php include_once "./includes/header.php" ?>
<?php include "./includes/user_form.php" ?>
<?php include "./index.php" ?>

<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $patronymic = $_POST['patronymic'];
    $start_age = $_POST['start_age'];
    $finish_age = $_POST['finish_age'];
    $speciality = $_POST['speciality'];
    $group = $_POST['group'];

    if (!empty($firstname) && !empty($lastname) && !empty($patronymic) && !empty($start_age) &&
        !empty($finish_age) && !empty($speciality) && !empty($group)) {
            write_to_db($firstname, $lastname, $patronymic, $start_age, $finish_age, $speciality, $group);
    }
}
?>

<!-- MAIN -->
<main class="main">
    <div class="container">
        <?php echo user_form("POST", "Добавить") ?>
    </div>
</main>
<!-- MAIN -->



<?php include_once "./includes/footer.php" ?>