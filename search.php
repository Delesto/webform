<?php require_once "./includes/header.php"?>
<?php require "./includes/input_form.php"?>
<?php require "./includes/output.php"?>

    <!-- MAIN -->
    <main class="main">
        <div class="container">
            <?php echo input_form("POST", "", "Поиск")?>
            <?php echo output()?>
        </div>
    </main>
    <!-- MAIN -->

<?php require_once "./includes/footer.php"?>