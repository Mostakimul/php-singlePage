<!-- Configure for database -->
<?php
include '../db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $client_name = $_POST['client_name'];
    $comment = $_POST['comment'];
    $client_image = $_FILES['client_image'];

    // For Large Image
    $explode = explode('.', $client_image['name']);
    $ext = end($explode);

    $allow_format = ['jpg', 'png', 'jpeg', 'PNG', 'JPG'];

    if (in_array($ext, $allow_format)) {

        if ($client_image['size'] <= 300000) {
            $insert = "INSERT INTO testimonial(client_name, comment) VALUES('$client_name', '$comment')";
            $testi_query = mysqli_query($db, $insert);

            $last_id = mysqli_insert_id($db);
            $image_name = 'testimonial' . $last_id . '.' . $ext;

            $new_location = '../upload/testimonial/' . $image_name;
            move_uploaded_file($client_image['tmp_name'], $new_location);

            $update_logo = "UPDATE testimonial SET client_image = '$image_name' WHERE id = $last_id";
            $up_query = mysqli_query($db, $update_logo);
            if ($up_query) {
                header('location:testimonial-list.php');
            }
        } else {
            echo 'Max size 3MB';
        }
    } else {
        echo 'Image Format not allowed';
    }
}
?>