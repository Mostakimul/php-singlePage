<?php
    session_start();
    require 'db.php';

    $id = $_GET['id'];

    // Query
    $restore = "UPDATE users SET status = 1 where id = $id";
    $restore_data = mysqli_query($db, $restore);

    // Restore Session
    if ($restore_data) {
        $_SESSION['restore'] = 'User Restored Successfully';
        header('location:user-list.php');
    } else {
        $_SESSION['restore'] = 'User restore Unsuccessful';
            header('location:user-list.php');
    }

?>