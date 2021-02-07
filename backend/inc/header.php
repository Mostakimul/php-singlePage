<?php
require 'session.php';
require '../db.php';
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
  <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

  <!-- Facebook -->
  <meta property="og:url" content="http://themepixels.me/starlight">
  <meta property="og:title" content="Starlight">
  <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

  <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
  <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="600">

  <!-- Meta -->
  <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
  <meta name="author" content="ThemePixels">

  <title>Starlight Responsive Bootstrap 4 Admin Template</title>

  <!-- vendor css -->
  <link href="assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link href="assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">
  <link href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
  <link href="assets/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
  <link href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">

  <!-- Starlight CSS -->
  <link rel="stylesheet" href="assets/css/starlight.css">
</head>

<body>

  <!-- ########## START: LEFT PANEL ########## -->
  <div class="sl-logo"><a href="../dasboard.php"><i class="icon ion-android-star-outline"></i> starlight</a></div>
  <div class="sl-sideleft">
    <div class="input-group input-group-search">
      <input type="search" name="search" class="form-control" placeholder="Search">
      <span class="input-group-btn">
        <button class="btn"><i class="fa fa-search"></i></button>
      </span><!-- input-group-btn -->
    </div><!-- input-group -->

    <label class="sidebar-label">Navigation</label>
    <div class="sl-sideleft-menu">
      <a href="../dashboard.php" class="sl-menu-link active">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
          <span class="menu-item-label">Dashboard</span>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->

      <a href="#" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon fa fa-diamond tx-24"></i>
          <span class="menu-item-label">Main Hero</span>
          <i class="menu-item-arrow fa fa-angle-down"></i>
        </div><!-- menu-item -->
      </a><!-- sl-menu-link -->
      <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item"><a href="./main-list.php" class="nav-link"> <i class="fa fa-list"></i> Main List</a></li>
        <li class="nav-item"><a href="./main-add.php" class="nav-link"> <i class="fa fa-plus"></i> New Main</a></li>
      </ul>

      <a href="user-list.php" class="sl-menu-link">
        <div class="sl-menu-item">
          <i class="menu-item-icon icon ion-ios-person-outline tx-20"></i>
          <span class="menu-item-label">All Users</span>
        </div><!-- menu-item -->

        <a href="mailbox.php" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon fa fa-envelope tx-20"></i>
            <span class="menu-item-label">Mailbox</span>
          </div><!-- menu-item -->

          <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon fa fa-cog tx-24"></i>
              <span class="menu-item-label">Settings</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="./logo.php" class="nav-link"><i class="fa fa-adjust"></i> Logo</a></li>
            <li class="nav-item"><a href="./contact.php" class="nav-link"> <i class="fa fa-address-card"></i> Contact</a></li>
          </ul>

          <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon ion-ios-navigate-outline tx-24"></i>
              <span class="menu-item-label">Services</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="./services-list.php" class="nav-link"> <i class="fa fa-list"></i> Services</a></li>
            <li class="nav-item"><a href="./service-add.php" class="nav-link"> <i class="fa fa-plus"></i> New Service</a></li>
          </ul>

          <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon fa fa-cube tx-24"></i>
              <span class="menu-item-label">About</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="./about-us.php" class="nav-link"> <i class="fa fa-list"></i> About Us</a></li>
            <li class="nav-item"><a href="./about-add.php" class="nav-link"> <i class="fa fa-plus"></i> New About</a></li>
          </ul>

          <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon fa fa-briefcase tx-24"></i>
              <span class="menu-item-label">Portfolio</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="./portfolio-list.php" class="nav-link"> <i class="fa fa-list"></i> Portfolio List</a></li>
            <li class="nav-item"><a href="./portfolio-add.php" class="nav-link"> <i class="fa fa-plus"></i> New Portfolio</a></li>
          </ul>

          <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon fa fa-bookmark tx-24"></i>
              <span class="menu-item-label">Testimonial</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="./testimonial-list.php" class="nav-link"> <i class="fa fa-list"></i> Testimonial List</a></li>
            <li class="nav-item"><a href="./testimonial-add.php" class="nav-link"> <i class="fa fa-plus"></i> New Testimonial</a></li>
          </ul>

          <a href="#" class="sl-menu-link">
            <div class="sl-menu-item">
              <i class="menu-item-icon icon fa fa-share-square tx-24"></i>
              <span class="menu-item-label">Social</span>
              <i class="menu-item-arrow fa fa-angle-down"></i>
            </div><!-- menu-item -->
          </a><!-- sl-menu-link -->
          <ul class="sl-menu-sub nav flex-column">
            <li class="nav-item"><a href="./social-list.php" class="nav-link"> <i class="fa fa-list"></i> Social List</a></li>
            <li class="nav-item"><a href="./social-add.php" class="nav-link"> <i class="fa fa-plus"></i> New Social</a></li>
          </ul>


    </div><!-- sl-sideleft-menu -->

    <br>
  </div><!-- sl-sideleft -->
  <!-- ########## END: LEFT PANEL ########## -->

  <!-- ########## START: HEAD PANEL ########## -->
  <div class="sl-header">
    <div class="sl-header-left">
      <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
      <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
    </div><!-- sl-header-left -->
    <div class="sl-header-right">
      <nav class="nav">
        <div class="dropdown">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <span class="logged-name"><?php echo $_SESSION['name'] ?></span>
            <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
          </a>
          <div class="dropdown-menu dropdown-menu-header wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li><a href=""><i class="icon ion-ios-person-outline"></i> Edit Profile</a></li>
              <li><a href=""><i class="icon ion-ios-gear-outline"></i> Settings</a></li>
              <li><a href=""><i class="icon ion-ios-download-outline"></i> Downloads</a></li>
              <li><a href=""><i class="icon ion-ios-star-outline"></i> Favorites</a></li>
              <li><a href=""><i class="icon ion-ios-folder-outline"></i> Collections</a></li>
              <li><a href="../logout.php"><i class="icon ion-power"></i> Sign Out</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </nav>
      <div class="navicon-right">
        <a id="btnRightMenu" href="" class="pos-relative">
          <i class="icon ion-ios-bell-outline"></i>
          <!-- start: if statement -->
          <span class="square-8 bg-danger"></span>
          <!-- end: if statement -->
        </a>
      </div><!-- navicon-right -->
    </div><!-- sl-header-right -->
  </div><!-- sl-header -->
  <!-- ########## END: HEAD PANEL ########## -->

  <!-- ########## START: RIGHT PANEL ########## -->
  <div class="sl-sideright">
    <ul class="nav nav-tabs nav-fill sidebar-tabs" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" role="tab" href="#messages">Messages (2)</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="tab" role="tab" href="#notifications">Notifications (8)</a>
      </li>
    </ul><!-- sidebar-tabs -->

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane pos-absolute a-0 mg-t-60 active" id="messages" role="tabpanel">
        <div class="media-list">
          <!-- loop starts here -->
          <a href="" class="media-list-link">
            <div class="media">
              <img src="../img/img3.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="mg-b-0 tx-medium tx-gray-800 tx-13">Donna Seay</p>
                <span class="d-block tx-11 tx-gray-500">2 minutes ago</span>
                <p class="tx-13 mg-t-10 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
              </div>
            </div><!-- media -->
          </a>
          <!-- loop ends here -->
        </div><!-- media-list -->
        <div class="pd-15">
          <a href="" class="btn btn-secondary btn-block bd-0 rounded-0 tx-10 tx-uppercase tx-mont tx-medium tx-spacing-2">View More Messages</a>
        </div>
      </div><!-- #messages -->

      <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="notifications" role="tabpanel">
        <div class="media-list">
          <!-- loop starts here -->
          <a href="" class="media-list-link read">
            <div class="media pd-x-20 pd-y-15">
              <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
              <div class="media-body">
                <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                <span class="tx-12">October 03, 2017 8:45am</span>
              </div>
            </div><!-- media -->
          </a>
          <!-- loop ends here -->
        </div><!-- media-list -->
      </div><!-- #notifications -->

    </div><!-- tab-content -->
  </div><!-- sl-sideright -->
  <!-- ########## END: RIGHT PANEL ########## --->