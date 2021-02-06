<?php
$main = "SELECT * FROM main_section";
$main_query = mysqli_query($db, $main);
$ser_assoc = mysqli_fetch_assoc($main_query);
?>
<!-- Header -->
<header id="header">
    <div class="intro" style="background: url('./upload/banner/<?= $ser_assoc['banner'] ?>') center center no-repeat;">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 intro-text">
                        <h1><?= $ser_assoc['title'] ?></h1>
                        <p><?= $ser_assoc['summary'] ?></p>
                        <a href="#" class="btn btn-custom btn-lg page-scroll"><?= $ser_assoc['button'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>