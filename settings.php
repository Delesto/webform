<?php require_once "./includes/header.php" ?>
<?php require "./includes/settings_form.php" ?>
<?php require "./includes/output.php" ?>
<?php require "./index.php" ?>

<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $patronymic = $_POST['patronymic'];
    $start_age = $_POST['start_age'];
    $finish_age = $_POST['finish_age'];
    $speciality = $_POST['speciality'];

    $data = array(
        "firstname" => $firstname,
        "lastname" => $lastname,
        "patronymic" => $patronymic,
        "start_age" => $start_age,
        "finish_age" => $finish_age,
        "speciality" => $speciality
    );
}
?>

<!-- MAIN -->
<main class="main">
    <div class="container">
        <?php echo settings_form("POST", "Отправить") ?>
        <?php
        // if( isset($_POST['submit']) ) {
        //     echo output(search($data));
        // }
        ?>
        
    </div>
</main>
<!-- MAIN -->

<?php require_once "./includes/footer.php" ?>