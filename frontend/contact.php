<?php
$settings = "SELECT * FROM settings ORDER BY id DESC limit 1";
$set_query = mysqli_query($db, $settings);
$set_assoc = mysqli_fetch_assoc($set_query);
?>
<!-- Contact Section -->
<div id="contact">
    <div class="container">
        <div class="col-md-8">
            <div class="row">
                <div class="section-title">
                    <h2>Get In Touch</h2>
                    <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
                </div>
                <form action="frontend/contact-message.php" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Name">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" class="form-control" rows="4" placeholder="Message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>

                    <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
                </form>
            </div>
        </div>
        <div class="col-md-3 col-md-offset-1 contact-info">
            <div class="contact-item">
                <h4>Contact Info</h4>
                <p><span>Address: </span><?= $set_assoc['address'] ?></p>
            </div>
            <div class="contact-item">
                <p><span>Phone: </span> <?= $set_assoc['phone2'] ?></p>
            </div>
            <div class="contact-item">
                <p><span>Email: </span> <?= $set_assoc['email'] ?></p>
            </div>
        </div>
        <?php
        $social = "SELECT * FROM social";
        $social_query = mysqli_query($db, $social);
        // $social_assoc = mysqli_fetch_assoc($social_query);
        ?>
        <div class="col-md-12">
            <div class="row">
                <div class="social">
                    <ul>
                        <?php
                        foreach ($social_query as $key => $soc) {
                        ?>
                            <li><a href="<?= $soc['link'] ?>"><i class="<?= $soc['icon'] ?>"></i></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>