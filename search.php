<?php require_once "./includes/header.php" ?>
<?php require "./includes/user_form.php" ?>
<?php require "./includes/output.php" ?>

<!-- MAIN -->
<main class="main">
    <div class="container">

        <?php echo user_form("POST", "./includes/search_handler.php", "Поиск") ?>

        <h2 class="h2">Результат: </h2>
        <?php
            if( isset($_GET['name']) && isset($_GET['lastname']) && isset($_GET['patronymic']) &&
            isset($_GET['start_age']) && isset($_GET['finish_age']) && isset($_GET['speciality']) && isset($_GET['student_group'])) {
                echo output(array(
                    "Имя" => $_GET['name'], 
                    "Фамилия" => $_GET['lastname'], 
                    "Отчество" => $_GET['patronymic'], 
                    "Год начала обучения" => $_GET['start_age'], 
                    "Год окончания обучения" => $_GET['finish_age'], 
                    "Специальность" => $_GET['speciality'], 
                    "Группа" => $_GET['student_group'] 
                ));
            }
        ?>
    </div>
</main>
<!-- MAIN -->

<?php require_once "./includes/footer.php" ?>