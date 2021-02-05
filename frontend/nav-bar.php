<?php
require './db.php';
$settings = "SELECT * FROM settings ORDER BY id DESC limit 1";
$set_query = mysqli_query($db, $settings);
$set_assoc = mysqli_fetch_assoc($set_query);
?>


<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand page-scroll" href="#page-top"><img style="width:50%;" src="./upload/logo/<?= $set_assoc['logo'] ?>" alt="logo"></a>
            <div class="phone"><span>Call Today</span><?= $set_assoc['phone1'] ?></div>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#about" class="page-scroll">About</a></li>
                <li><a href="#services" class="page-scroll">Services</a></li>
                <li><a href="#portfolio" class="page-scroll">Projects</a></li>
                <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
                <li><a href="#contact" class="page-scroll">Contact</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>