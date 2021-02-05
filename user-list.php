<?php
    session_start();
    require_once 'db.php';

    // Select All Active Users
    $sel_all = "SELECT * FROM users where status = 1";
    // For Sorting after users we can write
    // ORDER BY id/name ASC/DESC
    $all_query = mysqli_query($db, $sel_all);
    // Count Total user
    $sel_total = "SELECT COUNT(*) AS total FROM users where status = 1";
    $total_query = mysqli_query($db, $sel_total);
    $asoc = mysqli_fetch_assoc($total_query);

    // Select all deactive users
    $deactive_all = "SELECT * FROM users where status = 2";
    $deactive_all_query = mysqli_query($db, $deactive_all);
    // Count Total Deactive user
    $de_sel_total = "SELECT COUNT(*) AS total FROM users where status = 2";
    $de_total_query = mysqli_query($db, $de_sel_total);
    $de_asoc = mysqli_fetch_assoc($de_total_query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    
</head>
<body>
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h2 class="text-dark">All Active Users (<?php echo $asoc['total'] ?>)</h2>
        </div>
        <!-- Moved To trash Session -->
        <?php
            if(isset($_SESSION['trash'])) {
                ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong class="text-dark">
                            <?php
                                echo $_SESSION['trash'];
                                unset($_SESSION['trash']);
                            ?>
                        </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                        </button>
                    </div>
                <?php
            }
        ?>

        <!-- User Restore Session -->
        <?php
        if(isset($_SESSION['restore'])) {
                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong class="text-dark">
                            <?php
                                echo $_SESSION['restore'];
                                unset($_SESSION['restore']);
                            ?>
                        </strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true" class="text-dark">&times;</span>
                        </button>
                    </div>
                <?php
            }
        ?>
        <!-- All User Table -->
        <table class="table table-hover table-dark">
            <thead>
                <tr class="text-center">
                    <th scope="col">#SL</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($all_query as $key => $value) {
                        ?>
                            <tr class="text-center">
                                <th scope="row"><?= $key+1?></th>
                                <td><?php echo $value['name']?></td>
                                <td><?php echo $value['email']?></td>
                                <td><?php echo $value['phone']?></td>
                                <!-- echo can replace -->
                                <td><?= $value['gender']?></td> 
                                <td>
                                    <a href="user-edit.php?id=<?php echo $value['id']?>" class="btn btn-info">Edit</a>
                                    <a href="user-trash.php?id=<?php echo $value['id']?>" class="btn btn-danger">Trash</a>
                                </td>
                            </tr>
                        <?php
                    }
                ?>
                
            </tbody>
        </table>

        <!-- All Deactive User -->
        <div class="text-center mb-5">
            <h2 class="text-dark">All Active Users (<?php echo $de_asoc['total'] ?>)</h2>
        </div>
        <!-- Session for Deleted User -->
        <?php
            if(isset($_SESSION['delete'])) {
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
        <!-- User Table -->
        <table class="table table-hover table-dark">
            <thead>
                <tr class="text-center">
                    <th scope="col">#SL</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($deactive_all_query as $key => $value) {
                        ?>
                            <tr class="text-center">
                                <th scope="row"><?= $key+1?></th>
                                <td><?php echo $value['name']?></td>
                                <td><?php echo $value['email']?></td>
                                <td><?php echo $value['phone']?></td>
                                <!-- echo can replace -->
                                <td><?= $value['gender']?></td> 
                                <td>
                                    <a href="user-restore.php?id=<?php echo $value['id']?>" class="btn btn-success">Resotre</a>
                                    <a href="user-delete.php?id=<?php echo $value['id']?>" class="btn btn-danger">Permanent Delete</a>
                                </td>
                            </tr>
                        <?php
                    }
                ?>
                
            </tbody>
        </table>
    </div>
    


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- Theme JS -->
    <script src="./js/main.js"></script>
</body>
</html>