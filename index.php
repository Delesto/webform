<?php
function connect_to_db() {
    $servername = "localhost";
    $username = "Admin";
    $password = "webform";
    $dbname = "webform";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset( $conn, 'utf8');
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        return $conn;
    }
}

function write_to_db($firstname, $lastname, $patronymic, $start_age, $finish_age, $speciality) {
    $conn = connect_to_db();
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

function search($data) {
    $conn = connect_to_db();
    $conditions = array();
    $result = array();
    foreach($data as $field => $value) {
        if($value != "") {
            $conditions[] = "`$field` LIKE '%" . mysqli_real_escape_string($conn, $value) . "%'";
        }
    }

    $query = "SELECT * FROM myguests ";
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
            
        }
    } else {
        $result[] = "Ничего не найдено";
    }

    return $result;
}