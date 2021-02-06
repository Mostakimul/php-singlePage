<?php
$services = "SELECT * FROM services ORDER BY id DESC";
$ser_query = mysqli_query($db, $services);
// $ser_assoc = mysqli_fetch_assoc($ser_query);
?>
<!-- Services Section -->
<div id="services">
    <div class="container">
        <div class="section-title">
            <h2>Our Services</h2>
        </div>
        <div class="row">
            <?php
            foreach ($ser_query as $key => $service) {
            ?>
                <div class="col-md-4">
                    <div class="service-media"> <img src="./upload/services/<?= $service['image'] ?>" alt="<?= $service['title'] ?> "> </div>
                    <div class="service-desc">
                        <h3><a href="service-view.php?id=<?= $service['id'] ?>"><?= $service['title'] ?></a></h3>
                        <p><?= mb_strimwidth($service['summary'], 0, 180, "...") ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>