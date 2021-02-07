<?php
require './db.php';
include 'frontend/inc/header.php';
?>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navbar Section Start -->
    <?php include 'frontend/nav-bar.php';  ?>
    <!-- Navbar Section End -->

    <!-- Hero Section Start -->
    <?php include 'frontend/hero-section.php';  ?>
    <!-- Hero Section END -->
    <!-- Get Touch Section -->
    <div id="get-touch">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-offset-1">
                    <h3>Cost for your home renovation project</h3>
                    <p>Get started today and complete our form to request your free estimate</p>
                </div>
                <div class="col-xs-12 col-md-4 text-center"><a href="#contact" class="btn btn-custom btn-lg page-scroll">Free Estimate</a></div>
            </div>
        </div>
    </div>
    <!-- About Section Start -->
    <?php include 'frontend/about.php';  ?>
    <!-- About Section End -->
    <!-- Services Start -->
    <?php include 'frontend/services.php';  ?>
    <!-- Services End -->
    <!-- POrtfolio Start -->
    <?php include 'frontend/portfolio.php';  ?>
    <!-- POrtfolio END -->
    <!-- Testimonials Section Start-->
    <?php include 'frontend/testimonial.php';  ?>
    <!-- Testimonials Section End-->
    <!-- Contact section Start -->
    <?php include 'frontend/contact.php';  ?>
    <!-- Contact section End -->
    <!-- Footer Section Start -->
    <?php include 'frontend/inc/footer.php';  ?>
    <!-- Footer Section End -->

</body>

</html>