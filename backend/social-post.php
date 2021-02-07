<?php
require '../db.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $social = $_POST['social'];
    $link = $_POST['link'];

    if ($social == "Facebook") {
        $select = "INSERT INTO social(link, icon, name) VALUES('$link', 'fa fa-facebook' ,'$social')";
        $q = mysqli_query($db, $select);
    } elseif ($social == "Twitter") {
        $select = "INSERT INTO social(link, icon, name) VALUES('$link', 'fa fa-twitter' ,'$social')";
        $q = mysqli_query($db, $select);
    } elseif ($social == "Linked In") {
        $select = "INSERT INTO social(link, icon, name) VALUES('$link', 'fa fa-linkedin' ,'$social')";
        $q = mysqli_query($db, $select);
    } elseif ($social == "Youtube") {
        $select = "INSERT INTO social(link, icon, name) VALUES('$link', 'fa fa-youtube' ,'$social')";
        $q = mysqli_query($db, $select);
    } else {
        $select = "INSERT INTO social(link, icon, name) VALUES('$link', 'fa fa-google-plus' ,'$social')";
        $q = mysqli_query($db, $select);
    }

    if ($q) {
        header('location:social-list.php');
    } else {
        echo 'Data Not Inserted';
    }
}
