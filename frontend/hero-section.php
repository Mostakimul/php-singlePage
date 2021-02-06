<?php
$main = "SELECT * FROM main_section";
$main_query = mysqli_query($db, $main);
// $ser_assoc = mysqli_fetch_assoc($ser_query);
?>
<!-- Header -->
<header id="header">
    <div class="intro">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 intro-text">
                        <?php
                        foreach ($main_query as $key => $value) {
                        ?>
                            <h1><?= $value['title'] ?></h1>
                            <p><?= $value['summary'] ?></p>
                            <a href="#" class="btn btn-custom btn-lg page-scroll"><?= $value['button'] ?></a>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>