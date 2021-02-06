<?php
$testimonial = "SELECT * FROM testimonial";
$testi_query = mysqli_query($db, $testimonial);
// $ser_assoc = mysqli_fetch_assoc($ser_query);
?>
<!-- Testimonials Section -->
<div id="testimonials">
    <div class="container">
        <div class="section-title">
            <h2>Testimonials</h2>
        </div>
        <div class="row">
            <?php foreach ($testi_query as $key => $value) {
            ?>
                <div class="col-md-4">
                    <div class="testimonial">
                        <div class="testimonial-image"> <img src="./upload/testimonial/<?= $value['client_image'] ?>" alt="Client Image"> </div>
                        <div class="testimonial-content">
                            <p>"<?= $value['comment'] ?>"</p>
                            <div class="testimonial-meta"> - <?= $value['client_name'] ?> </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>
</div>