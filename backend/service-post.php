<!-- Configure for database -->
<?php
include '../db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $image = $_FILES['image'];

    $explode = explode('.', $image['name']);
    $ext = end($explode);
    $allow_format = ['jpg', 'png', 'jpeg', 'PNG', 'JPG'];

    if (in_array($ext, $allow_format)) {

        if ($image['size'] <= 300000) {
            $insert = "INSERT INTO services(title, summary) VALUES('$title', '$summary')";
            $ts_query = mysqli_query($db, $insert);

            $last_id = mysqli_insert_id($db);
            $image_name = $last_id . '.' . $ext;

            $new_location = '../upload/services/' . $image_name;
            move_uploaded_file($image['tmp_name'], $new_location);

            $update_logo = "UPDATE services SET image = '$image_name' WHERE id = $last_id";
            $up_query = mysqli_query($db, $update_logo);
            if ($up_query) {
                header('location:services-list.php');
            }
        } else {
            echo 'Max size 3MB';
        }
    } else {
        echo 'Logo Format not allowed';
    }
}
?>