<?php include 'inc/header.php'; ?>

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Starlight</a>
            <span class="breadcrumb-item active">All Users</span>
        </nav>

    <div class="sl-pagebody">
        <!-- ####### Page Title Start ######  -->
        <div class="sl-page-title">
            <h5>Update Logo</h5>
            <p>A collection basic to advanced table design that you can use to your data.</p>
        </div>
        <!-- ####### Page Title End ######  -->

        <!-- ####### Table Start ######  -->
        <div class="row row-sm mg-t-20">
            <!-- Left Column Start -->
            <div class="col-xl-6">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                    <h6 class="card-body-title">Upload Logo</h6>
                    <form action="logo.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <label class="col-sm-4 form-control-label">Image Logo: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="file" class="form-control" name="logo" placeholder="Enter firstname" onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])">
                            </div>
                        </div><!-- row -->
                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Text Logo: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" class="form-control" name="text" placeholder="Enter Text Logo">
                            </div>
                        </div>
                        <div class="form-layout-footer mg-t-30">
                            <button type="submit" class="btn btn-info mg-r-5">Upload</button>
                        </div><!-- form-layout-footer -->
                    </form> 
                </div><!-- card -->
            </div>
            <!-- Left Column End -->

            <!-- Right Column Start -->
            <div class="col-xl-6 mg-t-25 mg-xl-t-0">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-5">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Logo Preview</h6>
                    <div class="row row-xs">
                        <img id="logo" width="170" height="170" src="../assets/img/no-image.png" alt="no-image">
                    </div>
                </div>
            </div>
        </div>
        <!-- ####### Table End ######  -->
    </div><!-- sl-pagebody -->

    <!-- Configure for database -->
    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $text = $_POST['text'];
            $logo_image = $_FILES['logo'];

            $explode = explode('.', $logo_image['name']);
            $ext = end($explode);
            $allow_format = ['jpg', 'png', 'jpeg', 'PNG', 'JPG'];

            if (in_array($ext, $allow_format)) {

                if ($logo_image['size'] <= 30000) {
                    $insert = "INSERT INTO settings(text_logo) VALUES('$text')";
                    $logo_query = mysqli_query($db, $insert);

                    $last_id = mysqli_insert_id($db);
                    $image_name = $last_id.'.'.$ext;

                    $new_location = '../upload/logo/'.$image_name;
                    move_uploaded_file($logo_image['tmp_name'], $new_location);

                    $update_logo = "UPDATE settings SET logo = '$image_name' WHERE id = $last_id";
                    $up_query = mysqli_query($db, $update_logo);
                } else{
                    echo 'Max size 3MB';
                }

            } else {
                echo 'Logo Format not allowed';
            }
        }
    ?>

<?php include 'inc/footer.php'; ?>

