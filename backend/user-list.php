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
      <h5>All Users</h5>
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
              <th>Phone</th>
              <th>Gender</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $select = "SELECT * FROM users where status = 1";
            $user_query = mysqli_query($db, $select);
            foreach ($user_query as $key => $value) {
            ?>
              <tr>
                <td><?= $key + 1 ?></td>
                <td><?= $value['name'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['phone'] ?></td>
                <td><?= $value['gender'] ?></td>
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