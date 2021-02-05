<?php
    session_start();
    require 'db.php';

    $trash_id = $_GET['id'];

    // Moving to Trash
    $trash_user = "UPDATE users SET status = 2 where id = $trash_id";
    $trash_query = mysqli_query($db, $trash_user);

    // Trash Session
    if ($trash_query) {
        $_SESSION['trash'] = 'User Moved to trash';
        header('location:user-list.php');
    } else {
        $_SESSION['trash'] = 'User Is not Moved to trash';
            header('location:user-list.php');
    }

?>