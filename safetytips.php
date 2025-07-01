<?php $page = "safetytips"; ?>
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
    <section class="safety-banner">
        <img class="img-fluid w-100" src="images/safety-banner.webp" alt="demo traders about banner"
            title="Demo Traders">
    </section>
    <section class="tips-section py-5">
        <div class="container">
            <header class="tips-header text-center mb-5">
                <h2 class="tips-title">Celebrate Responsibly</h2>
                <p class="tips-subtitle">A colorful celebration begins with caution. Here's your essential fireworks
                    safety guide.</p>
                <div class="tips-underline"></div>
            </header>

            <section class="tips-cards d-flex flex-wrap">
                <?php
                $tips = [
                    ['type' => 'do', 'icon' => 'shield-fill-check', 'title' => 'Buy Certified', 'text' => 'Only buy fireworks from licensed vendors. These products pass safety standards and are legally approved for use by the public. Always ask for certification at purchase.'],
                    ['type' => 'do', 'icon' => 'book', 'title' => 'Read Instructions', 'text' => 'Every firework has unique behavior. Read the manufacturer’s guidelines before lighting. This helps avoid improper use and unexpected results.'],
                    ['type' => 'do', 'icon' => 'droplet', 'title' => 'Stay Hydrated', 'text' => 'Keep water or sand buckets nearby. They’re essential in case a spark causes an unintended fire or a firework malfunctions mid-launch.'],
                    ['type' => 'do', 'icon' => 'wind', 'title' => 'Open Spaces', 'text' => 'Light fireworks in clear outdoor areas. Avoid lighting near dry leaves, buildings, or parked vehicles to reduce fire risks.'],
                    ['type' => 'do', 'icon' => 'arrows-expand', 'title' => 'Step Back', 'text' => 'After lighting, move to a safe distance quickly. This ensures you avoid misfires or unpredictable projectiles.'],
                    ['type' => 'do', 'icon' => 'person-fill-check', 'title' => 'Adult Guidance', 'text' => 'Children should only observe fireworks with adult supervision. Even sparklers can burn at extremely high temperatures.'],

                    ['type' => 'dont', 'icon' => 'slash-circle', 'title' => 'No Re-lighting', 'text' => 'If a firework doesn’t go off, don’t try to relight it. Wait at least 20 minutes, then soak it in water before disposal.'],
                    ['type' => 'dont', 'icon' => 'thermometer-half', 'title' => 'Avoid Heat', 'text' => 'Don’t store fireworks near heat or flame. Improper storage significantly increases the risk of premature ignition.'],
                    ['type' => 'dont', 'icon' => 'house-door-fill', 'title' => 'No Indoors', 'text' => 'Never light fireworks inside rooms, porches, or garages. Confined areas trap heat and smoke, amplifying danger.'],
                    ['type' => 'dont', 'icon' => 'person-dash', 'title' => 'No Kids Handling', 'text' => 'Don’t allow young children to handle or ignite fireworks. The risk of burns and accidents is high even with basic items.'],
                    ['type' => 'dont', 'icon' => 'wallet2', 'title' => 'No Pocket Storage', 'text' => 'Avoid carrying fireworks in your pockets. Friction, heat, or compression could trigger an explosion.'],
                    ['type' => 'dont', 'icon' => 'bullseye', 'title' => 'No Aiming', 'text' => 'Never point fireworks at people, animals, buildings, or cars. Even small misfires can cause serious injury or damage.']
                ];

                foreach ($tips as $t):
                    $cardClass = $t['type'] === 'do' ? 'tip-card-do' : 'tip-card-dont';
                    ?>
                    <article class="tip-card col-12 col-md-6 col-lg-4 p-3">
                        <div class="tip-card-inner <?= $cardClass ?> p-4 d-flex flex-column justify-content-between h-100">
                            <div>
                                <span class="icon-wrapper mb-3">
                                    <i class="bi bi-<?= $t['icon'] ?> h2"></i>
                                </span>
                                <h3 class="tip-title mb-2"><?= $t['title'] ?></h3>
                                <p class="tip-text"><?= $t['text'] ?></p>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </section>

            <section class="tips-cta mt-5 p-4 text-center">
                <h4>Explore Our Safe, Certified Fireworks</h4>
                <a href="products.php" class="btn explore-btn mt-3">Browse Products</a>
            </section>
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