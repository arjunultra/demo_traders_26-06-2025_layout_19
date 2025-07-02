<?php
$page = "contact";
?>
<!DOCTYPE html>
<html lang="en">

<head itemscope itemtype="http://www.schema.org/website">
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="">
    <meta property="og:url" content="https://.com">
    <meta property="og:image" content="https://.com/images/android-icon-192x192.png">
    <meta name="keywords" content="">
    <meta property="og:description" name="description" content="">
    <meta name="robots" content="all">
    <meta name="revisit-after" content="10 Days">
    <meta name="copyright" content="">
    <meta name="language" content="English">
    <meta name="distribution" content="Global">
    <meta name="web_author" content="srisoftwarez.com">
    <meta name="msapplication-TileImage" content="images/ms-icon-144x144.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-icon-72x72.png">
    <link rel="icon" sizes="192x192" href="images/android-icon-192x192.png">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/hover-min.css">
    <link rel="stylesheet" href="css/odometer-theme.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>

<body itemscope itemtype="http://schema.org/WebPage">
    <?php include_once "header.php"; ?>
    <section class="contact-banner">
        <img class="img-fluid w-100" src="images/contact-banner.webp" alt="demo traders about banner"
            title="Demo Traders">
    </section>
    <!-- contact section -->
    <section class="contact-hub py-5">
        <div class="container">

            <!-- Header -->
            <header class="row justify-content-center mb-5">
                <div class="col-12 col-lg-8 text-center">
                    <span class="contact-hub-pre-title">Let’s Connect</span>
                    <h2 class="contact-hub-title">Get in Touch <span class="contact-hub-title-highlight">Now</span></h2>
                    <p class="contact-hub-subtitle">Questions? Orders? Need guidance? We’re just a click or call away.
                    </p>
                </div>
            </header>
            <!-- Contact Cards -->
            <div class="row mb-5">
                <?php
                $cards = [
                    ['icon' => 'geo-alt-fill', 'title' => 'Location', 'lines' => ["Demo Building, Demo Street", "Sivakasi Main Road", "Sivakasi"]],
                    ['icon' => 'telephone-fill', 'title' => 'Phone', 'lines' => ["+91 99999 99999", "+91 88888 88888", "+91 77777 77777"]],
                    ['icon' => 'envelope-fill', 'title' => 'Email', 'lines' => ["contact@demotraders.com", "sales@demotraders.com"]],
                    ['icon' => 'clock-fill', 'title' => 'Business Hours', 'lines' => ["Mon – Sat: 9 AM – 8 PM", "Sunday: Closed"]]
                ];
                foreach ($cards as $c):
                    ?>
                    <article class="col-12 col-md-6 col-lg-3 mb-4">
                        <div class="contact-hub-card p-4 rounded shadow-sm h-100">
                            <div class="d-flex align-items-center justify-content-center justify-content-lg-start mb-3">
                                <i class="bi bi-<?= $c['icon'] ?> contact-hub-card-icon"></i>
                                <h4 class="contact-hub-card-title ml-3"><?= $c['title'] ?></h4>
                            </div>
                            <?php foreach ($c['lines'] as $line): ?>
                                <?php if ($c['title'] === 'Phone'): ?>
                                    <p class="mb-1"><a href="tel:<?= preg_replace('/\s+/', '', $line) ?>"
                                            class="contact-hub-phone-number"><?= $line ?></a></p>
                                <?php elseif ($c['title'] === 'Email'): ?>
                                    <p class="mb-1"><a href="mailto:<?= $line ?>" class="contact-hub-email-address"><?= $line ?></a>
                                    </p>
                                <?php else: ?>
                                    <p class="mb-1"><?= $line ?></p>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
            <!-- Map Section -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="contact-hub-map-wrapper rounded overflow-hidden shadow-sm">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62970.01160346889!2d77.75142297351574!3d9.454179599892328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b06cee43d812d0d%3A0x8ce12e9dcdaa2a2c!2sSivakasi%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1738684672622!5m2!1sen!2sin"
                            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
            <!-- Amenities -->
            <section class="contact-hub-visit-benefits mb-5">
                <div class="row justify-content-center text-center mb-4">
                    <div class="col-12 col-lg-8">
                        <h3 class="contact-hub-benefits-title">When You Visit Our Showroom</h3>
                        <p class="contact-hub-benefits-subtitle">Enjoy exclusive amenities designed to enhance your
                            in‑store experience</p>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $amenities = ['wifi' => 'Free Wi‑Fi for customers', 'cup-hot-fill' => 'Refreshments in our lounge', 'person-wheelchair' => 'Wheelchair‑accessible showroom', 'car-front-fill' => 'Dedicated parking'];
                    foreach ($amenities as $icon => $text): ?>
                        <article class="col-12 col-md-6 col-lg-3 mb-4">
                            <div class="contact-hub-feature-box p-4 text-center h-100">
                                <div class="contact-hub-feature-icon mb-3"><i class="bi bi-<?= $icon ?>"></i></div>
                                <p class="mb-0"><?= $text ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>

                <!-- Offers -->
                <div class="row justify-content-center text-center mt-5 mb-4">
                    <div class="col-12 col-lg-8">
                        <h3 class="contact-hub-benefits-title">Special In‑Store Offers</h3>
                        <p class="contact-hub-benefits-subtitle">Avail exclusive discounts and gifts when shopping
                            directly with us</p>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $offers = ['gift-fill' => 'Complimentary Gift Box over ₹2000', 'percent' => 'Bulk Discount Slabs', 'wallet2' => 'Instant Cash Discounts', 'stars' => 'Lucky Draw Coupons'];
                    foreach ($offers as $icon => $text): ?>
                        <article class="col-12 col-md-6 col-lg-3 mb-4">
                            <div class="contact-hub-offer-box p-4 text-center h-100">
                                <div class="contact-hub-offer-icon mb-3"><i class="bi bi-<?= $icon ?>"></i></div>
                                <p class="mb-0"><?= $text ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- Complex CTA -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center">
                    <a href="products.php" class="contact-hub-btn contact-hub-btn-cta mt-3">Browse Safe Fireworks</a>
                </div>
            </div>

        </div>
    </section>



    <div class="footer-bottom py-2 bg-danger text-white">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-12 col-lg-12 mb-3 mb-md-0">
                    <p class="copyright text-center m-0">&copy; 2025 Demo Traders. All rights reserved. Designed and
                        Developed by <a class="text-dark bg-warning p-1 rounded-pill px-4"
                            href="https://www.srisoftwarez.com/" target="_blank">Sri
                            Softwarez</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="fixed point w0">
        <a href="https://api.whatsapp.com/send?phone=919999999999">
            <img src="images/whatsappicon.png" class="priceicn float-left" alt="" title="">
        </a>
    </div>
    <div class="fixed point1 w0 d-none d-lg-block">
        <span class="time-of-year">
            <img src="images/callicon.png" class="priceicn float-left" alt="" title="">
            <div class="tooltip text-white carter text-center"> For More Details Call <br>
                <i class="fa fa-phone text-white"></i> +91 99999 99999
            </div>
        </span>
    </div>
    <div class="fixed point1 w0 d-lg-none">
        <a href="tel:+919999999999">
            <img src="images/callicon.png" class="priceicn float-left" alt="" title="">
        </a>
    </div>
    <div class="fixed point2">
        <a href="products.php">
            <img src="images/quickpurchase.png" class="priceicn2 float-right blink" alt="" title="">
        </a>
    </div>


    <script src="js/odometer.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/script.js"></script>
</body>

</html>