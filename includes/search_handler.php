<?php
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $patronymic = $_POST['patronymic'];
    $start_age = $_POST['start_age'];
    $finish_age = $_POST['finish_age'];
    $speciality = $_POST['speciality'];
    $group = $_POST['group'];

    $data = array(
        "firstname" => $firstname,
        "lastname" => $lastname,
        "patronymic" => $patronymic,
        "start_age" => $start_age,
        "finish_age" => $finish_age,
        "speciality" => $speciality,
        "student_group" => $group
    );

    require "./connect_to_db.php";
        
    $conditions = array();
    $result = "";
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
            $result .= "name" . "=" . $row["firstname"] . "&";
            $result .= "lastname" . "=" . $row["lastname"] . "&";
            $result .= "patronymic" . "=" . $row["patronymic"] . "&";
            $result .= "start_age" . "=" . $row["start_age"] . "&";
            $result .= "finish_age" . "=" . $row["finish_age"] . "&";
            $result .= "speciality" . "=" . $row["speciality"] . "&";
            $result .= "student_group" . "=" . $row["student_group"];
        }
        
        header("Location: http://localhost/webform/search.php?" . $result);
    } else {
        header("Location: http://localhost/webform/error.php?search=nothing_found");
    }
}
