<!-- Configure for database -->
<?php
include '../db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $summary = $_POST['summary'];
    $button = $_POST['button'];
    $banner = $_FILES['banner'];

    // For Large Image
    $explode = explode('.', $banner['name']);
    $ext = end($explode);

    $allow_format = ['jpg', 'png', 'jpeg', 'PNG', 'JPG'];

    if (in_array($ext, $allow_format)) {

        if ($banner['size'] <= 3000000) {

            $insert = "INSERT INTO main_section(title, summary, button) VALUES('$title', '$summary', '$button')";
            $main_query = mysqli_query($db, $insert);

            $last_id = mysqli_insert_id($db);
            $image_name = 'main' . $last_id . '.' . $ext;

            $new_location = '../upload/banner/' . $image_name;
            move_uploaded_file($banner['tmp_name'], $new_location);

            $update_logo = "UPDATE main_section SET banner = '$image_name' WHERE id = $last_id";
            $up_query = mysqli_query($db, $update_logo);
            if ($up_query) {
                header('location:main-list.php');
            }
        } else {
            echo 'Max size 3MB';
        }
    } else {
        echo 'Image Format not allowed';
    }
}
?>