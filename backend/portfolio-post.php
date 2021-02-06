<!-- Configure for database -->
<?php
include '../db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $project_title = $_POST['project_title'];
    $large_image = $_FILES['large_image'];
    $small_image = $_FILES['small_image'];

    // For Large Image
    $explode_large = explode('.', $large_image['name']);
    $ext_large = end($explode_large);
    // For Small Image
    $explode_small = explode('.', $small_image['name']);
    $ext_small = end($explode_small);

    $allow_format = ['jpg', 'png', 'jpeg', 'PNG', 'JPG'];

    if (in_array($ext_large, $allow_format) && in_array($ext_small, $allow_format)) {

        if ($large_image['size'] <= 300000 && $small_image['size'] <= 300000) {
            $insert = "INSERT INTO portfolio(project_title) VALUES('$project_title')";
            $pot_query = mysqli_query($db, $insert);

            $last_id = mysqli_insert_id($db);
            $large_image_name = 'lg' . $last_id . '.' . $ext_large;
            $small_image_name =  'sm' . $last_id . '.' . $ext_small;

            $new_location_large = '../upload/portfolio/' . $large_image_name;
            $new_location_small = '../upload/portfolio/' . $small_image_name;
            move_uploaded_file($large_image['tmp_name'], $new_location_large);
            move_uploaded_file($small_image['tmp_name'], $new_location_small);

            $update_logo = "UPDATE portfolio SET large_image = '$large_image_name', small_image = '$small_image_name' WHERE id = $last_id";
            $up_query = mysqli_query($db, $update_logo);
            if ($up_query) {
                header('location:portfolio-list.php');
            }
        } else {
            echo 'Max size 3MB';
        }
    } else {
        echo 'Image Format not allowed';
    }
}
?>