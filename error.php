<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php require "./includes/head.php" ?>
</head>

<body id="error-page">

    <!-- MAIN -->
    <main class="main">
        <div class="container">
            <h2 class="h2">Ошибка: </h2>
            <?php
            if(isset($_GET["error"])) {
                if ($_GET["error"] == "db_connection") {
                    echo "Не удалось выполнить соединение с базой данных.";
                }
            } else {
                if($_GET["search"] == "nothing_found") {
                    echo "Извините, ничего не найдено.";
                }
            }
            ?>
        </div>
    </main>
    <!-- MAIN -->

</body>

</html>