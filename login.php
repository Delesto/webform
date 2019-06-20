<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <?php require "./includes/head.php"?>
    </head>
    <body id="login-page">

    <!-- MAIN -->
    <main class="main">
        <div class="container">
            <form action="./includes/login_handler.php" method="POST" class="form">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="form-wrap">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-9">
                                    <h2>Вход</h2>
                                    <fieldset>
                                        <div class="input-wrap d-flex flex-column">
                                            <label for="login">Логин</label>
                                            <input type="text" id="login" name="username">
                                        </div>
                                        <div class="input-wrap d-flex flex-column">
                                            <label for="password">Пароль</label>
                                            <input type="password" id="password" name="password">
                                        </div>
                                        <input class="submit form-submit" name="submit" type="submit" value="Войти"/>
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

    </body>
</html>