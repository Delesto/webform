<?php require_once "./includes/header.php" ?>
<?php require_once "./includes/input_form.php" ?>
<?php require_once "./index.php" ?>

<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $patronymic = $_POST['patronymic'];
    $start_age = $_POST['start_age'];
    $finish_age = $_POST['finish_age'];
    $speciality = $_POST['speciality'];
    
    if (!empty($firstname) && !empty($lastname) && !empty($patronymic) && !empty($start_age) &&
        !empty($finish_age) && !empty($speciality)) {
            write_to_db($firstname, $lastname, $patronymic, $start_age, $finish_age, $speciality);
    }

}
?>

<!-- MAIN -->
<main class="main">
    <div class="container">
        <?php echo input_form("POST", "input_form_handler.php", "Добавить") ?>
    </div>
</main>
<!-- MAIN -->



<?php require_once "./includes/footer.php" ?>