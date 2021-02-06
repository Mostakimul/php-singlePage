<!-- Configure for database -->
<?php
include '../db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $description = $_POST['description'];
    $points = $_POST['points'];
    $about_image = $_FILES['about_image'];

    $explode = explode('.', $about_image['name']);
    $ext = end($explode);
    $allow_format = ['jpg', 'png', 'jpeg', 'PNG', 'JPG'];

    if (in_array($ext, $allow_format)) {

        if ($about_image['size'] <= 300000) {
            $insert = "INSERT INTO about(description, points) VALUES('$description', '$points')";
            $ts_query = mysqli_query($db, $insert);

            $last_id = mysqli_insert_id($db);
            $image_name = $last_id . '.' . $ext;

            $new_location = '../upload/about/' . $image_name;
            move_uploaded_file($about_image['tmp_name'], $new_location);

            $update_logo = "UPDATE about SET about_image = '$image_name' WHERE id = $last_id";
            $up_query = mysqli_query($db, $update_logo);
            if ($up_query) {
                header('location:about-us.php');
            }
        } else {
            echo 'Max size 3MB';
        }
    } else {
        echo 'Image Format not allowed';
    }
}
?>