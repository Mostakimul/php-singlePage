<?php
require '../db.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $phone1 = $_POST['phone1'];
    $phone2 = $_POST['phone2'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    //$id = $_POST["id"];

    // Take Row Form Database without passing in hidden field
    $select = "SELECT COUNT(*) as total, id FROM settings";
    $q = mysqli_query($db, $select);
    $asc = mysqli_fetch_assoc($q);
    // die($asc['id']);
    $id = $asc["id"];

    $insert = "UPDATE settings SET phone1 = '$phone1', phone2 = '$phone2', address = '$address', email = '$email' WHERE id = $id";
    $query = mysqli_query($db, $insert);
    if ($query) {
        header('location:contact.php');
    } else {
        echo 'Data Not Inserted';
    }
}
