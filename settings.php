<?php include_once "./includes/header.php" ?>

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
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" class="form settings-form">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="form-wrap">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-9">
                                <h2>Подключение к БД</h2>
                                <fieldset class="db-config">
                                    <div class="input-wrap d-flex flex-column">
                                        <label for="db-name">Имя базы данных*</label>
                                        <input type="text" id="db-name" name="db_name">
                                    </div>
                                    <div class="input-wrap d-flex flex-column">
                                        <label for="server">Сервер базы данных*</label>
                                        <input type="text" id="server" name="server_name">
                                    </div>
                                    <div class="input-wrap d-flex flex-column">
                                        <label for="username">Имя пользователя*</label>
                                        <input type="text" id="username" name="user_name">
                                    </div>
                                    <div class="input-wrap d-flex flex-column">
                                        <label for="userpass">Пароль пользователя*</label>
                                        <input type="text" id="userpass" name="user_password">
                                    </div>
                                    <input class="submit form-submit" name="submit" type="submit" value="Отправить"/>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
<!-- MAIN -->

<?php include_once "./includes/footer.php" ?>