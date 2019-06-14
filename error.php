<?php include_once "./includes/header.php" ?>
<?php include "./includes/functions.php" ?>

<?php
// if(!$_SESSION["err"]) {
//     header("Location: http://localhost/webform/add.php");
// }
?>

<!-- MAIN -->
<main class="main">
    <div class="container">
        <h2 class="h2">Ошибка: </h2>
        <?php
            session_start();
            echo error_handler($_SESSION["err"]);
            // unset($_SESSION["err"]);
        ?>
    </div>
</main>
<!-- MAIN -->

<?php include_once "./includes/footer.php" ?>