<?php
require '../db.php';
// $text_logo = $_POST["text_logo"];


// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     $update = "UPDATE settings SET text_logo = '$text_logo'";
//     $query = mysqli_query($db, $update);
// } else {
//     # code...
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $text = $_POST['text'];
    $logo_image = $_FILES['logo'];
    $id = $_POST["id"];

    // Extraxt ext from imgae
    $explode = explode('.', $logo_image['name']);
    $ext = end($explode);

    $allow_format = ['jpg', 'png', 'jpeg', 'PNG', 'JPG'];

    if (in_array($ext, $allow_format)) {

        if ($logo_image['size'] <= 300000) {

            // Fetch from database
            $select = "SELECT * FROM settings WHERE id= $id";

            $que = mysqli_query($db, $select);
            $assc = mysqli_fetch_assoc($que);

            // Folder Check for image
            if (file_exists('../upload/logo/' . $assc['logo'])) {
                // delete Image
                unlink('../upload/logo/' . $assc['logo']);
            }
            // Insert in database
            $image_name = $id . '.' . $ext;
            $up = "UPDATE settings SET text_logo = '$text', logo = '$image_name'  WHERE id = $id";
            $q_update = mysqli_query($db, $up);
            $new_location = '../upload/logo/' . $image_name;
            move_uploaded_file($logo_image['tmp_name'], $new_location);
        } else {
            echo 'Max size 3MB';
        }
    } else {
        echo 'Logo Format not allowed';
    }
}
