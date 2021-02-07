<!-- Configure for database -->
<?php

require '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $insert = "INSERT INTO contact_message(name, email, message) VALUES('$name', '$email', '$message')";
    $ms_query = mysqli_query($db, $insert);

    if ($ms_query) {
        header('location:../index.php#contact');
    } else {
        echo "Message Note Sent";
    }
}
?>