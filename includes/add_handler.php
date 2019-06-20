<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $patronymic = $_POST['patronymic'];
    $start_age = $_POST['start_age'];
    $finish_age = $_POST['finish_age'];
    $speciality = $_POST['speciality'];
    $group = $_POST['group'];

    if (!empty($firstname) && !empty($lastname) && !empty($patronymic) && !empty($start_age) &&
        !empty($finish_age) && !empty($speciality) && !empty($group)) {
        require "./connect_to_db.php";
        $table = "CREATE TABLE students (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
            firstname VARCHAR(60) NOT NULL,
            lastname VARCHAR(60) NOT NULL,
            patronymic VARCHAR(60) NOT NULL,
            start_age VARCHAR(30) NOT NULL,
            finish_age VARCHAR(30) NOT NULL,
            speciality VARCHAR(30) NOT NULL,
            student_group VARCHAR(30) NOT NULL
        )";
    
        $insert = "INSERT INTO students (firstname, lastname, patronymic, start_age, finish_age, speciality, student_group)
                        VALUES ('{$firstname}', '{$lastname}', '{$patronymic}', '{$start_age}', '{$finish_age}', '{$speciality}', '{$group}')";
    
        mysqli_query($conn, $table);
        mysqli_query($conn, $insert);
        mysqli_close($conn);

        header("Location: http://localhost/webform/add.php");
    }
}
