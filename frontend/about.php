<?php
$about = "SELECT * FROM about";
$ab_query = mysqli_query($db, $about);
$ab_assoc = mysqli_fetch_assoc($ab_query);
?>
<!-- About Section -->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6"> <img src="./upload/about/<?= $ab_assoc['about_image'] ?>" alt="About Image " class="img-responsive"> </div>
            <div class="col-xs-12 col-md-6">
                <div class="about-text">
                    <h2>Who We Are</h2>
                    <p><?= $ab_assoc['description'] ?></p>
                    <h3>Why Choose Us?</h3>
                    <div class="list-style">
                        <div class="col-lg-6 col-sm-6 col-xs-12">
                            <ul>
                                <?php
                                $all_point = $ab_assoc['points'];
                                $points = explode(',', $all_point);
                                foreach ($points as $point) {
                                ?>
                                    <li><?= $point ?></li>
                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <!-- <div class="col-lg-6 col-sm-6 col-xs-12">
                            <ul>
                                <li>Free Consultation</li>
                                <li>Satisfied Customers</li>
                                <li>Project Management</li>
                                <li>Affordable Pricing</li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>