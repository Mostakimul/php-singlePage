<?php
$id = $_POST['id'];
require '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $link = $_POST['link'];


    $update = "UPDATE social SET link='$link' where id = $id ";
    $query = mysqli_query($db, $update);



    if ($query) {
        // $_SESSION['edit'] = 'Link Updated Successfully';
        header('location:social-list.php');
    } else {
        // $_SESSION['delete'] = 'Update Unsuccessful';
        // header('location:social-list.php');
        echo "Not Updated";
    }
} else {
    echo 'Please Enter Data';
}
