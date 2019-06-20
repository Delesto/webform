<?php
    $server_name = "localhost";
    $db_name = "webform";
    $user_password = "webform";
    $user_name = "Admin";
    
    if(isset($_COOKIE["db_connection"])) {
        $db_connection = unserialize($_COOKIE["db_connection"], ["allow_classes" => false]);

        $server_name = $db_connection["server_name"];
        $db_name = $db_connection["db_name"];
        $user_password = $db_connection["user_password"];
        $user_name = $db_connection["user_name"];
    }

    $conn = mysqli_connect($server_name, $user_name, $user_password, $db_name);
    if(!$conn) {   
        header("Location: http://localhost/webform/error.php?error=db_connection");
        die();
    } else {
        mysqli_set_charset( $conn, 'utf8');
    }