<?php
    session_start();
    require 'db.php';

    $id = $_GET['id'];

    // Query for view user
    $edit_query = "SELECT * FROM users Where id = $id";
    $edit = mysqli_query($db, $edit_query);

    // Covert to Associative Array
    $assoc = mysqli_fetch_assoc($edit);

    // Session for transfer id to next page
    $_SESSION['user_id'] = $id;

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    
</head>
<body>
    
    <form class="col-6" action="user-update.php" method="post">
        <h2 class="text-center font-weight-bolder">Edit User</h2>
        <hr>
        <!-- Hidden Field for transfer id to next page -->
        <!-- <input type="hidden" name="id" value=""> -->

        <!-- User Name Input field Start -->
        <div class="form-group">
            <label for="username">User Name:</label>
            <input type="text" class="form-control cstm-username" id="username" name="username" placeholder="Please Enter Your Username" value="<?php echo $assoc['name']?>">

            <!-- Username Session -->
            <span class="text-light">
            <?php
                if (isset($_SESSION['username'])) {
                echo $_SESSION['username'];
                echo '<style>
                    .cstm-username {
                        border: 2px solid green;
                    }
                    </style>';
                unset($_SESSION['username']);
                }
                
            ?>
            </span>
        </div>
        

        <!-- Email Input field -->
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control cstm-email" id="email" name="email" placeholder="Please Enter Your Email" aria-describedby="emailHelp" value="<?php echo $assoc['email']?>">

            <!-- Email Session -->
            <span class="text-light">
                <?php
                if (isset($_SESSION['email'])) {
                    echo $_SESSION['email'];
                    echo '<style>
                    .cstm-email {
                        border: 2px solid green;
                    }
                    </style>';
                    unset($_SESSION['email']);
                }
                ?>
            </span>
        </div>

        <!-- Phone Input field -->
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" class="form-control cstm-phone" id="phone" name="phone" placeholder="Enter Your Mobile Number" value="<?php echo $assoc['phone']?>">

            <!-- Phone Session -->
            <span class="text-light">
            <?php
                if (isset($_SESSION['phone'])) {
                echo $_SESSION['phone'];
                echo '<style>
                        .cstm-phone {
                            border: 2px solid green;
                        }
                        </style>';
                unset($_SESSION['phone']);
                }
            ?>
            </span>
        </div>

        <!-- Buttuon -->
        <button name="submit" type="submit" class="btn btn-light mt-2 offset-5">Update</button>
    </form>



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- Theme JS -->
    <script src="./js/main.js"></script>
</body>
</html>