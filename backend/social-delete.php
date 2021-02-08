<?php

session_start();
require '../db.php';

$permanent_delete = $_GET['id'];

// Permanent Delete
$delete = "DELETE from social where id = $permanent_delete";
$del_query = mysqli_query($db, $delete);

// Permanent Delete
if ($del_query) {
    $_SESSION['delete'] = 'Social Link Deleted Successfully';
    header('location:social-list.php');
} else {
    $_SESSION['delete'] = 'Delete Unsuccessful';
    header('location:social-list.php');
}
