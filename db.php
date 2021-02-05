<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'citweb');

    $db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    } //else {
    //     echo 'Connected Sussefully';
    // }
?>