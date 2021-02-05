<?php

    /*
    echo '<pre>';
    print_r($_SERVER);
    echo '<pre>';
    */

    session_start();
    require 'db.php';
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $gender = $_POST['gender'];

        // Query for check Existing email
        $check_user = "SELECT COUNT(*) as total FROM users where email = '$email'";
        $user_query = mysqli_query($db, $check_user);
        $assoc_check = mysqli_fetch_assoc($user_query);

        // Email existing check
        if (!$assoc_check['total'] > 0) {
            // email validation regex
            $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

            // Email Check
            if (!empty($email)) {
                if (preg_match($regex, $email)) {
                    echo 'Email Address: '.$email.'<br>';
                } else {
                    $_SESSION['email'] = 'Please Enter Email';
                    header('location:register-form.php');
                    die();
                }
            } else {
                $_SESSION['email'] = 'Please Enter Email';
                header('location:register-form.php');
                die();
            }

            // Password Check
            if (!empty($password)) {
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                echo 'Password: '.$password.'<br>';
            } else {
                $_SESSION['password']  = 'Please Enter Password!';
                header('location:register-form.php');
                die();
            }
            
            // Phone Check
            if (!empty($phone)) {
                echo 'Phone Number: '.$phone.'<br>';
            } else {
                $_SESSION['phone'] = 'Please Enter Phone Number!';
                header('location:register-form.php');
                die();
            }

            // Gender Check
            if (!($gender == 'choose')) {
                echo 'Gender: '.$gender.'<br>';
            } else {
                $_SESSION['gender'] = 'Please Select your Gender!';
                header('location:register-form.php');
                die();
            }
            
            // Datbase Insertion
            $insert = "INSERT INTO users(name, email, password, phone, gender) VALUES('$username', '$email', '$password', '$phone', '$gender')";

            $query = mysqli_query($db, $insert);

            if($query) {
                header('location:login.php');
            } else {
                echo 'Data Not Inserted';
            }
        } else {
            $_SESSION['email'] = 'Email Already Registered!!!';
            header('location:register-form.php');
        }
        

        
        

    } else {
        echo 'Please Enter Form Data';
    }

?>