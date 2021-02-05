<?php
session_start();
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query for check Existing email
    $check_user = "SELECT COUNT(*) as  total, name, email, password FROM users where email = '$email'";
    $user_query = mysqli_query($db, $check_user);
    $assoc_check = mysqli_fetch_assoc($user_query);

    if ($assoc_check['total'] > 0) {

        $hash = $assoc_check['password'];

        if (password_verify($password, $hash)) {
            $_SESSION['email'] = $assoc_check['email'];
            $_SESSION['name'] = $assoc_check['name'];
            header('location:backend/dashboard.php');
        } else {
            $_SESSION['password'] = 'Wrong Password!!!';
            header('location:login.php');
        }
    } else {
        $_SESSION['email'] = 'Email Does not Exist!!!';
        header('location:login.php');
    }
} else {
    echo 'Logged in unsuccessful';
}
