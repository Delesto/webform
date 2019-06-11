<?php
function settings_form($method, $submit_lable) {
    return <<<HTML
        <form action="{$_SERVER['PHP_SELF']}" method="{$method}" class="form settings-form">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-6 col-md-12">
                    <div class="settings-form-wrap">
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
                                    <input class="submit settings-submit" name="submit" type="submit" value="{$submit_lable}"/>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
HTML;
}