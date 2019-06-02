<?php

function write_to_db($firstname, $lastname, $patronymic, $start_age, $finish_age, $speciality)
{
    $servername = "localhost";
    $username = "Admin";
    $password = "webform";
    $dbname = "webform";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $create_table = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        patronymic VARCHAR(50),
        start_age VARCHAR(30),
        finish_age VARCHAR(30),
        speciality VARCHAR(30)
    )";

    $insert_into = "INSERT INTO MyGuests (firstname, lastname, patronymic, start_age, finish_age, speciality)
VALUES ('{$firstname}', '{$lastname}', '{$patronymic}', '{$start_age}', '{$finish_age}', '{$speciality}')";

    mysqli_query($conn, $create_table);
    mysqli_query($conn, $insert_into);

    mysqli_close($conn);
}
