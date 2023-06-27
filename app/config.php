<?php

    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "BD_final"; 
    $conn = new PDO_MYSQL($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

?>
