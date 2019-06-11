<?php require_once "./includes/header.php" ?>
<?php require "./includes/user_form.php" ?>
<?php require "./includes/output.php" ?>
<?php include "./includes/functions.php" ?>

<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $patronymic = $_POST['patronymic'];
    $start_age = $_POST['start_age'];
    $finish_age = $_POST['finish_age'];
    $speciality = $_POST['speciality'];
    $group = $_POST['group'];

    // $data = array($firstname, $lastname, $patronymic, $start_age, $finish_age, $speciality);
    $data = array(
        "firstname" => $firstname,
        "lastname" => $lastname,
        "patronymic" => $patronymic,
        "start_age" => $start_age,
        "finish_age" => $finish_age,
        "speciality" => $speciality,
        "student_group" => $group
    );
}
?>

<!-- MAIN -->
<main class="main">
    <div class="container">
        <?php echo user_form("POST", "Поиск") ?>
        <h2 class="result">Результат: </h2>
        <?php 
            if( isset($_POST['submit']) ) {
                echo output(search($data));
            }
        ?>
    </div>
</main>
<!-- MAIN -->

<?php require_once "./includes/footer.php" ?>