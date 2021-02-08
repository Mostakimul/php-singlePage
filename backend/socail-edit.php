<?php
include 'inc/header.php';
$id = $_GET['id'];
// Query for view user
$edit_query = "SELECT * FROM social Where id = $id";
$edit = mysqli_query($db, $edit_query);

// Covert to Associative Array
$assoc = mysqli_fetch_assoc($edit);
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Update Social</span>
    </nav>

    <div class="sl-pagebody">
        <!-- ####### Page Title Start ######  -->
        <div class="sl-page-title">

            <h5>Update Social</h5>
        </div>
        <!-- ####### Page Title End ######  -->

        <!-- ####### Table Start ######  -->
        <div class="row row-sm mg-t-20">
            <!-- Left Column Start -->
            <div class="col-xl-6">
                <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
                    <h6 class="card-body-title">Social</h6>

                    <form action="social-update.php" method="post">

                        <input type="hidden" name="id" value="<?= $id ?>">

                        <div class="row mg-t-20">
                            <label class="col-sm-4 form-control-label">Link: <span class="tx-danger">*</span></label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="url" name="link" class="form-control" value="<?php echo $assoc['link'] ?>" placeholder="https://example.com">
                            </div>
                        </div><!-- row -->

                        <div class="form-layout-footer mg-t-30">
                            <button style="cursor: pointer;" type="submit" class="btn btn-info mg-r-5">Update</button>
                        </div><!-- form-layout-footer -->
                    </form>
                </div><!-- card -->
            </div>
            <!-- Left Column End -->
        </div>
        <!-- ####### Table End ######  -->
    </div><!-- sl-pagebody -->

    <?php include 'inc/footer.php'; ?>