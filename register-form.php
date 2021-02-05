<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">

    
</head>
<body>
    
<form class="col-6" action="form-handle.php" method="post">
      <h2 class="text-center font-weight-bolder">Registration Form</h2>
      <hr>

      <!-- User Name Input field Start -->
      <div class="form-group">
        <label for="username">User Name:</label>
        <input type="text" class="form-control cstm-username" id="username" name="username" placeholder="Please Enter Your Username">

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
        <input type="email" class="form-control cstm-email" id="email" name="email" placeholder="Please Enter Your Email" aria-describedby="emailHelp">

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

      <!-- Password Input field -->
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control cstm-password" id="password" name="password" placeholder="Please Enter your password">

        <!-- Password Session -->
        <span class="text-light">
        <?php
          if (isset($_SESSION['password'])) {
            echo $_SESSION['password'];
            echo '<style>
                  .cstm-password {
                    border: 2px solid green;
                  }
                </style>';
                unset($_SESSION['password']);
          }
        ?>
        </span>
      </div>

      <!-- Phone Input field -->
      <div class="form-group">
        <label for="phone">Phone Number:</label>
        <input type="tel" class="form-control cstm-phone" id="phone" name="phone" placeholder="Enter Your Mobile Number">

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

      <!-- Gender Field -->
      <div class="form-group">
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" class="form-control cstm-gender">
            <option value="choose">Choose...</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>

        <!-- Gender Session -->
        <span class="text-light">
            <?php
              if (isset($_SESSION['gender'])) {
                echo $_SESSION['gender'];
                echo '<style>
                      .cstm-gender {
                        border: 2px solid green;
                      }
                    </style>';
              unset($_SESSION['gender']);
              }
            ?>
        </span>
      </div>
      <!-- Buttuon -->
      <button name="submit" type="submit" class="btn btn-light mt-2 offset-5">Submit</button>
    </form>



    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <!-- Theme JS -->
    <script src="./js/main.js"></script>
</body>
</html>