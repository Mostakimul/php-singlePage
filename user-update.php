<?php
    session_start();
    require 'db.php';

    $id = $_SESSION['user_id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $update = "UPDATE users SET name='$username', email='$email', phone='$phone' where id = $id ";
        $query = mysqli_query($db, $update);
        


        if ($query) {
            $_SESSION['restore'] = 'User Updated Successfully';
            header('location:user-list.php');
        } else {
            $_SESSION['delete'] = 'Update Unsuccessful';
            header('location:user-list.php');
        }


    } else {
        echo 'Please Enter Data';
    }
    

?>