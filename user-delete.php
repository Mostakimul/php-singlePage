<?php

    session_start();
    require 'db.php';

    $permanent_delete = $_GET['id'];

    // Permanent Delete
    $delete = "DELETE from users where id = $permanent_delete";
    $del_query = mysqli_query($db, $delete);

    // Permanent Delete
    if ($del_query) {
        $_SESSION['delete'] = 'User Deleted Successfully';
        header('location:user-list.php');
    } else {
        $_SESSION['delete'] = 'Delete Unsuccessful';
        header('location:user-list.php');
    }
    
?>