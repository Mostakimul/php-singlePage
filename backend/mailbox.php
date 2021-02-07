<?php include 'inc/header.php'; ?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Mailbox</span>
    </nav>

    <div class="sl-pagebody">
        <!-- ####### Page Title Start ######  -->
        <div class="sl-page-title">
            <h5>Mailbox</h5>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select = "SELECT * FROM contact_message ORDER BY status ASC";
                        $user_query = mysqli_query($db, $select);
                        foreach ($user_query as $key => $value) {
                        ?>
                            <tr <?php
                                if ($value['status'] == 1) {
                                    echo "style='background: #dee2e6'";
                                } else {
                                    echo "style='background: #fff'";
                                }

                                ?>>
                                <td><?= $key + 1 ?></td>
                                <td><?= $value['name'] ?></td>
                                <td><?= $value['email'] ?></td>
                                <td><?= $value['message'] ?></td>
                                <td>
                                    <?php
                                    if ($value['status'] == 1) {
                                    ?>
                                        <a style="cursor: pointer;" href="read_unread.php?id=<?php echo $value['id'] ?>" class="btn btn-info text-light">Read</a>
                                    <?php
                                    } else {
                                    ?>
                                        <a style="cursor: pointer;" href="read_unread.php?id=<?php echo $value['id'] ?>" class="btn btn-danger text-light">Unread</a>
                                    <?php
                                    }
                                    ?>
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