<?php require_once "./includes/header.php" ?>
<?php require "./includes/user_form.php" ?>

<!-- MAIN -->
<main class="main">
    <div class="container">
        <?php echo user_form("POST", "./includes/add_handler.php", "Добавить") ?>
    </div>
</main>
<!-- MAIN -->

<?php require_once "./includes/footer.php" ?>