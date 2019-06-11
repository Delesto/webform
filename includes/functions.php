<?php
function connect_to_db($server_name, $user_name, $user_password, $db_name) {    
    $conn = mysqli_connect($server_name, $user_name, $user_password, $db_name);
    mysqli_set_charset( $conn, 'utf8');
    if ($conn) {
        return $conn;
    } else {
        die("Connection failed: " . mysqli_connect_error());
    }
}

function write_to_db($firstname, $lastname, $patronymic, $start_age, $finish_age, $speciality, $group) {
    $db_connection = unserialize($_COOKIE["db_connection"], ["allow_classes" => false]);
    if($db_connection) {
        $conn = connect_to_db($db_connection["server_name"], $db_connection["user_name"], $db_connection["user_password"], $db_connection["db_name"]);
        $table = "CREATE TABLE students (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
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
    }
}

function search($data) {
    $db_connection = unserialize($_COOKIE["db_connection"], ["allow_classes" => false]);
    if($db_connection) {
        $conn = connect_to_db($db_connection["server_name"], $db_connection["user_name"], $db_connection["user_password"], $db_connection["db_name"]);
        
        $conditions = array();
        $result = array();
        foreach($data as $field => $value) {
            if($value != "") {
                $conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($conn, $value) . "%'";
            }
        }
    
        $query = "SELECT * FROM students ";
        if(count($conditions) > 0) {
            $query .= "WHERE " . implode (' AND ', $conditions);
        }
    
        $query_result = mysqli_query($conn, $query);
    
        $query_result_check =  mysqli_num_rows($query_result);
        if($query_result_check > 0) {
            while($row = mysqli_fetch_assoc($query_result)) {
                $result['Имя:'] = $row['firstname']; 
                $result['Фамилия:'] = $row['lastname']; 
                $result['Отчество:'] = $row['patronymic']; 
                $result['Год начала обучения:'] = $row['start_age']; 
                $result['Год окончания обучения:'] = $row['finish_age']; 
                $result['Специальность:'] = $row['speciality']; 
                $result['Группа:'] = $row['student_group']; 
                
            }
            return $result;
        } else {
            return "Ничего не найдено";
        }
    
    } else {
        return "Не удалось подключиться к базе данных";
    }
}