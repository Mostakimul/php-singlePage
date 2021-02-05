<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Twitter -->
  <meta name="twitter:site" content="@themepixels">
  <meta name="twitter:creator" content="@themepixels">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Starlight">
  <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="twitter:image" content="//themepixels.me/starlight/img/starlight-social.png">

  <!-- Facebook -->
  <meta property="og:url" content="//themepixels.me/starlight">
  <meta property="og:title" content="Starlight">
  <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

  <meta property="og:image" content="//themepixels.me/starlight/img/starlight-social.png">
  <meta property="og:image:secure_url" content="//themepixels.me/starlight/img/starlight-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>Starlight Responsive Bootstrap 4 Admin Template</title>

  <!-- vendor css -->
  <link href="backend/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="backend/assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">


  <!-- Starlight CSS -->
  <link rel="stylesheet" href="backend/assets/css/starlight.css">
</head>

<body>

  <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
      <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">starlight <span class="tx-info tx-normal">admin</span></div>
      <div class="tx-center mg-b-60">Professional Admin Template Design</div>

      <form action="login-handle.php" method="post">
        <div class="form-group">
          <input type="text" name="email" class="form-control cstm-error" placeholder="Enter your username">
          <!-- Email Session -->
          <span class="text-danger">
            <?php
            if (isset($_SESSION['email'])) {
              echo $_SESSION['email'];
              echo '<style>
                  .cstm-error {
                    border: 2px solid red;
                  }
                </style>';
              unset($_SESSION['email']);
            }
            ?>
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" name="password" class="form-control" placeholder="Enter your password">
          <!-- Password Session -->
          <span class="text-danger">
            <?php
            if (isset($_SESSION['password'])) {
              echo $_SESSION['password'];
              echo '<style>
                      .cstm-error {
                        border: 2px solid red;
                      }
                    </style>';
              unset($_SESSION['password']);
            }
            ?>
          </span>
          <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
        </div><!-- form-group -->
        <button style="cursor: pointer;" type="submit" class="btn btn-info btn-block">Sign In</button>
      </form>

      <div class="mg-t-60 tx-center">Not yet a member? <a href="register-form.php" class="tx-info">Sign Up</a></div>
    </div><!-- login-wrapper -->
  </div><!-- d-flex -->

  <script src="backend/assets/lib/jquery/jquery.js"></script>
  <script src="backend/assets/lib/popper.js/popper.js"></script>
  <script src="backend/assets/lib/bootstrap/bootstrap.js"></script>

</body>

</html>