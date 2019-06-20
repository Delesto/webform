<?php

    if(isset($_POST['submit'])) { 
        require "./connect_to_db.php";
        
        $username = $_POST["username"];
        $password = $_POST["password"];
    }
