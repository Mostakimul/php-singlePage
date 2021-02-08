<?php
include 'inc/header.php';
// Select For View List
$select = "SELECT * FROM social";
$user_query = mysqli_query($db, $select);

?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">All Social</span>
    </nav>

    <div class="sl-pagebody">
        <!-- ####### Page Title Start ######  -->
        <div class="sl-page-title">
            <h5>All Social</h5>
            <!-- <p>A collection basic to advanced table design that you can use to your data.</p> -->
        </div>
        <!-- ####### Page Title End ######  -->

        <!-- ####### Table Start ######  -->
        <div class="card pd-20 pd-sm-40">
            <!-- Session for Deleted User -->
            <?php
            if (isset($_SESSION['delete'])) {
            ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong class="text-dark">
                        <?php
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                        ?>
                    </strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                    </button>
                </div>
            <?php
            }

            ?>

            <div class="table-responsive">
                <table class="table table-bordered mg-b-0" id="myTable">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Name</th>
                            <th>Link</th>
                            <th>Icon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($user_query as $key => $value) {
                        ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value['name'] ?></td>
                                <td><?= $value['link'] ?></td>
                                <td><?= $value['icon'] ?></td>
                                <td>
                                    <a href="social-edit.php?id=<?php echo $value['id'] ?>" class="btn btn-info text-light">Edit</a>
                                    <a href="social-delete.php?id=<?php echo $value['id'] ?>" class="btn btn-danger text-light">Delete</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div><!-- ####### Table End ######  -->
    </div><!-- sl-pagebody -->

    <?php include 'inc/footer.php'; ?>