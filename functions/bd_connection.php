<?php
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'saveworld';
    $conn = new mysqli($server, $user, $password, $database);
    $conn->set_charset("UTF-8");

    if ($conn->connect_error) {
        echo $error->$conn->connect_error;
    }
?>