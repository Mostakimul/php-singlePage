<?php
$portfolio = "SELECT * FROM portfolio";
$port_query = mysqli_query($db, $portfolio);
// $ser_assoc = mysqli_fetch_assoc($ser_query);
?>
<!-- Gallery Section -->
<div id="portfolio">
    <div class="container">
        <div class="section-title">
            <h2>Our Works</h2>
        </div>
        <div class="row">
            <div class="portfolio-items">
                <?php
                foreach ($port_query as $key => $value) {
                ?>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio-item">
                            <div class="hover-bg"> <a href="./upload/portfolio/<?= $value['large_image'] ?>" alt="<?= $value['project_title'] ?> " title="<?= $value['project_title'] ?>" data-lightbox-gallery="gallery1">
                                    <div class="hover-text">
                                        <h4><?= $value['project_title'] ?></h4>
                                    </div>
                                    <img src="./upload/portfolio/<?= $value['small_image'] ?>" alt="<?= $value['project_title'] ?> " title="<?= $value['project_title'] ?>" class="img-responsive" alt="Project Title">
                                </a> </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>