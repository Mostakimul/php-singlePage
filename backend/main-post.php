<!-- Configure for database -->
<?php
include '../db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $button = $_POST['button'];

    $insert = "INSERT INTO main_section(title, summary, button) VALUES('$title', '$summary', '$button')";
    $main_query = mysqli_query($db, $insert);

    if ($main_query) {
        header('location:main-list.php');
    } else {
        echo "Insert Error";
    }
}
?>