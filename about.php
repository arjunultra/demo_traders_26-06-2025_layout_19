<?php $page = "about"; ?>
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
    <section class="about-banner wow fadeInRight" wow-delay="5s">
        <img class="img-fluid w-100" src="images/about-banner.webp" alt="demo traders about banner"
            title="Demo Traders">
    </section>
    <!-- about intro -->
    <section class="about-intro-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image -->
                <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                    <img src="images/about-hero.webp" alt="Our History"
                        class="img-fluid rounded about-intro-image wow wow-rotate " data-wow-delay="0.3s">
                </div>
                <!-- Text -->
                <div class="col-12 col-md-6 col-lg-6">
                    <h2 class="about-intro-title">Our Legacy & Passion</h2>
                    <p class="about-intro-text">
                        Founded over two decades ago in the heart of Sivakasi, Demo Traders was born from a family’s
                        love for lighting up festivity.
                        From a modest small shop, we have grown into a trusted name in wholesale and retail
                        fireworks—while keeping safety, innovation,
                        and customer joy at our core.
                    </p>
                    <p class="about-intro-text">
                        We believe every celebration deserves brilliance—that’s why we partner with trusted
                        manufacturers to bring you certified, safe, and spectacular fireworks. From handpicked festive
                        combos to year-round bestsellers, we carefully curate our shelves so your moments always sparkle
                        with confidence.
                    </p>
                    <a href="contact.php" class="about-intro-btn">Get in Touch</a>
                </div>
            </div>
        </div>
    </section>
    <!-- brands swiper -->
    <section class="brands-section pt-5 pb-5">
        <div class="container-fluid overflow-hidden">
            <h2 class="brands-section-title text-center mb-5">Our Trusted Brands</h2>
            <div class="swiper-container brands-swiper">
                <div class="swiper-wrapper">
                    <?php for ($i = 1; $i <= 12; $i++): ?>
                        <div class="swiper-slide brand-slide">
                            <div class="brand-card position-relative text-center p-3">
                                <img src="images/brand-<?= $i ?>.webp" alt="Brand <?= $i ?>"
                                    class="img-fluid brand-img mb-3">
                                <h5 class="brand-name">Brand‑<?= $i ?></h5>
                                <a href="products.php" class="brand-buy-btn">Buy Now</a>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>
                <div class="swiper-button-prev brands-button-prev"></div>
                <div class="swiper-button-next brands-button-next"></div>
                <div class="swiper-pagination brands-pagination"></div>
            </div>
        </div>
    </section>
    <!-- why choose us -->
    <section class="why-choose-section py-5 position-relative">
        <!-- Subtle SVG Background -->
        <svg class="why-choose-bg position-absolute" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 400">
            <defs>
                <pattern id="dots" width="20" height="20" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="2" fill="var(--color3)" opacity="0.1" />
                </pattern>
            </defs>
            <rect width="800" height="400" fill="url(#dots)" />
        </svg>

        <div class="container position-relative">
            <h2 class="why-choose-title text-center mb-4">Why Choose Us?</h2>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="choose-card choose-1 text-center p-4 rounded">
                        <i class="bi bi-shield-lock choose-icon mb-3"></i>
                        <h5 class="choose-name">Safety Certified</h5>
                        <p class="choose-text">We stock certified products and share expert guidance to ensure safe
                            celebrations.</p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="choose-card choose-2 text-center p-4 rounded">
                        <i class="bi bi-heart choose-icon mb-3"></i>
                        <h5 class="choose-name">Curated Selection</h5>
                        <p class="choose-text">Each product is carefully selected for performance and customer delight.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="choose-card choose-3 text-center p-4 rounded">
                        <i class="bi bi-people choose-icon mb-3"></i>
                        <h5 class="choose-name">Community Trusted</h5>
                        <p class="choose-text">We’ve earned loyalty across families and festivals through consistent
                            service.</p>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="choose-card choose-4 text-center p-4 rounded">
                        <i class="bi bi-clock-history choose-icon mb-3"></i>
                        <h5 class="choose-name">On-Time Delivery</h5>
                        <p class="choose-text">We make sure your order is ready when you need it — no delays, no stress.
                        </p>
                    </div>
                </div>
                <!-- Card 5 -->
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="choose-card choose-5 text-center p-4 rounded">
                        <i class="bi bi-award choose-icon mb-3"></i>
                        <h5 class="choose-name">Top Brands</h5>
                        <p class="choose-text">We only deal with brands that uphold the best quality and reputation in
                            fireworks.</p>
                    </div>
                </div>
                <!-- Card 6 -->
                <div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="choose-card choose-6 text-center p-4 rounded">
                        <i class="bi bi-lightning-charge choose-icon mb-3"></i>
                        <h5 class="choose-name">Instant Support</h5>
                        <p class="choose-text">Got questions? Our expert team is here for you — fast, friendly, and
                            helpful.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <?php include_once "footer.php"; ?>

    <script src="js/odometer.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/wow.js"></script>
    <script>
        new WOW().init();
    </script>
    <script src="js/script.js"></script>
</body>

</html>