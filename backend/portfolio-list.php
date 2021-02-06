<?php include 'inc/header.php'; ?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Portfolio</span>
    </nav>

    <div class="sl-pagebody">
        <!-- ####### Page Title Start ######  -->
        <div class="sl-page-title">
            <h5>Portfolio</h5>
            <!-- <p>A collection basic to advanced table design that you can use to your data.</p> -->
        </div>
        <!-- ####### Page Title End ######  -->

        <!-- ####### Table Start ######  -->
        <div class="card pd-20 pd-sm-40">

            <div class="table-responsive">
                <table class="table table-bordered mg-b-0" id="myTable">
                    <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Title</th>
                            <th>Large Image</th>
                            <th>Small Imgae</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select = "SELECT * FROM portfolio";
                        $port_query = mysqli_query($db, $select);
                        foreach ($port_query as $key => $value) {

                        ?>
                            <tr>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value['project_title'] ?></td>
                                <td><img style="width: 200px;" src="../upload/portfolio/<?= $value['large_image'] ?>" alt="Large Image"></td>
                                <td><img style="width: 100px;" src="../upload/portfolio/<?= $value['small_image'] ?>" alt="Small Image"></td>
                                <td>
                                    <a herf="#" class="btn btn-info text-light">Edit</a>
                                    <a herf="#" class="btn btn-danger text-light">Trash</a>
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