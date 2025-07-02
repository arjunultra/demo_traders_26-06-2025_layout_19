<?php $page = "home"; ?>
<!DOCTYPE html>
<html lang="en">

<head itemscope itemtype="http://www.schema.org/website">
	<title>Premium Quality Fireworks</title>
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
	<!--index carousel -->
	<section class="home-carousel wow fadeIn" data-wow-delay="0.5s">
		<div class="swiper home-carousel-swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="images/slide-1.webp" class="img-fluid" alt="Fireworks Slide 1">
				</div>
				<div class="swiper-slide">
					<img src="images/slide-2.webp" class="img-fluid" alt="Fireworks Slide 2">
				</div>
			</div>
		</div>
	</section>
	<!-- index welcome -->
	<section class="welcome-section py-5 wow fadeIn">
		<div class="container-fluid">
			<div class="row no-gutters align-items-center">
				<!-- Text Column -->
				<div class="col-12 col-md-6 col-lg-6 welcome-section-text px-4 py-5 wow fadeInLeft"
					data-wow-delay="0.5s">
					<span class="welcome-section-pre-title">Welcome to</span>
					<h1 class="welcome-section-title">India’s Premier <span class="highlighted-text">Fireworks
							Hub</span></h1>
					<p class="welcome-section-subtitle">Explore a dazzling range of wholesale and retail fireworks
						designed to light up your celebrations safely and spectacularly.</p>
					<a href="products.php" class="welcome-section-btn">Explore Products</a>
				</div>

				<!-- Image Column -->
				<div class="col-12 col-md-6 col-lg-6 welcome-section-image wow fadeInRight" data-wow-delay="0.5s">
					<div class="welcome-section-image-wrapper bg-purple rounded-circle">
						<img src="images/welcome-hero.webp" alt="Fireworks Banner" class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- index products section -->
	<!-- Products Slider Section -->
	<section class="products-section py-5 wow fadeIn" data-wow-delay="0.5s">
		<div class="container">
			<h2 class="products-section-title text-center mb-4">Our Featured Fireworks</h2>
			<div class="swiper-container products-swiper">
				<div class="swiper-wrapper">
					<?php
					$products = [
						['id' => 'product-1', 'title' => 'Flowerpots', 'img' => 'flowerpots.jpg', 'desc' => 'Colorful flowerpot fountains with long-lasting sparks.'],
						['id' => 'product-2', 'title' => 'Single Sound Bombs', 'img' => 'sound-bombs.jpg', 'desc' => 'Classic loud single crackling bombs for festive rounds.'],
						['id' => 'product-3', 'title' => 'Rockets', 'img' => 'rockets.jpg', 'desc' => 'Sky rockets that soar high and burst in vibrant colors.'],
						['id' => 'product-4', 'title' => 'Sparklers', 'img' => 'sparklers.jpg', 'desc' => 'Safe handheld sparklers for all ages to enjoy.'],
						['id' => 'product-5', 'title' => 'Ground Chakkars', 'img' => 'ground-chakkars.jpg', 'desc' => 'Spinning ground spinners with bright spin patterns.'],
						['id' => 'product-6', 'title' => 'Kids Crackers', 'img' => 'kids-crackers.jpg', 'desc' => 'Fun, safe gun and cap crackers for children’s parties.'],
						['id' => 'product-1', 'title' => 'Flowerpots', 'img' => 'flowerpots.jpg', 'desc' => 'Colorful flowerpot fountains with long-lasting sparks.'],
						['id' => 'product-2', 'title' => 'Single Sound Bombs', 'img' => 'sound-bombs.jpg', 'desc' => 'Classic loud single crackling bombs for festive rounds.'],
						['id' => 'product-3', 'title' => 'Rockets', 'img' => 'rockets.jpg', 'desc' => 'Sky rockets that soar high and burst in vibrant colors.'],
						['id' => 'product-4', 'title' => 'Sparklers', 'img' => 'sparklers.jpg', 'desc' => 'Safe handheld sparklers for all ages to enjoy.'],
						['id' => 'product-5', 'title' => 'Ground Chakkars', 'img' => 'ground-chakkars.jpg', 'desc' => 'Spinning ground spinners with bright spin patterns.'],
						['id' => 'product-6', 'title' => 'Kids Crackers', 'img' => 'kids-crackers.jpg', 'desc' => 'Fun, safe gun and cap crackers for children’s parties.']
					];
					foreach ($products as $prod):
						?>
						<div class="swiper-slide product-slide" id="<?= $prod['id'] ?>">
							<div class="card product-card h-100">
								<div class="product-image-wrapper overflow-hidden">
									<img src="images/<?= $prod['id'] . '.webp' ?>" class="card-img-top product-image"
										alt="<?= $prod['title'] ?>">
								</div>
								<div class="card-body text-center">
									<h5 class="product-title"><?= $prod['title'] ?></h5>
									<p class="product-desc"><?= $prod['desc'] ?></p>
									<a href="products.php#<?= $prod['id'] ?>" class="btn product-buy-btn">Buy Now</a>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>

				<!-- Navigation -->
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
				<div class="swiper-pagination"></div>
			</div>
		</div>
	</section>
	<!-- index counter -->
	<!-- Counter Section -->
	<section class="counter-section py-5 wow fadeIn" data-wow-delay="1s">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-12 text-center">
					<h2 class="counter-section-heading text-uppercase">Our Trusted Milestones</h2>
					<p class="counter-section-intro">Celebrating our journey with thousands of satisfied customers and
						expanding reach.</p>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<!-- Top Row -->
			<div class="row justify-content-center">
				<?php
				$top = [
					['icon' => 'people-fill', 'label' => 'Happy Customers', 'count' => 1200],
					['icon' => 'truck-front-fill', 'label' => 'Deliveries Made', 'count' => 4500],
					['icon' => 'award-fill', 'label' => 'Awards Won', 'count' => 15]
				];
				foreach ($top as $ctr): ?>
					<div class="col-12 col-md-4 col-lg-3 mb-4">
						<div class="counter-card p-4 text-center rounded">
							<div class="counter-icon mb-3">
								<i class="bi bi-<?= $ctr['icon'] ?> display-4"></i>
							</div>
							<div class="counter-value odometer" data-target="<?= $ctr['count'] ?>">0</div>
							<div class="counter-label mt-2"><?= $ctr['label'] ?></div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<!-- Bottom Row -->
			<div class="row justify-content-center">
				<?php
				$bottom = [
					['icon' => 'calendar-fill', 'label' => 'Years of Service', 'count' => 10],
					['icon' => 'stars', 'label' => 'Products Available', 'count' => 300],
					['icon' => 'geo-alt-fill', 'label' => 'Cities Covered', 'count' => 25]
				];
				foreach ($bottom as $index => $ctr): ?>
					<div class="col-12 col-md-4 col-lg-3 mb-4 <?= $index === 0 ? 'offset-lg-1' : '' ?>">
						<div class="counter-card p-4 text-center rounded">
							<div class="counter-icon mb-3">
								<i class="bi bi-<?= $ctr['icon'] ?> display-4"></i>
							</div>
							<div class="counter-value odometer" data-target="<?= $ctr['count'] ?>">0</div>
							<div class="counter-label mt-2"><?= $ctr['label'] ?></div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- parallax section -->
	<section class="parallax-section position-relative text-center d-flex align-items-center wow fadeIn"
		data-wow-delay="0.5s">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2 class="parallax-title">Light Up Your Celebrations</h2>
					<p class="parallax-subtitle">Browse our exclusive collection of premium fireworks designed to make
						your moments shine.</p>
					<a href="products.php" class="parallax-cta">Discover Now</a>
				</div>
			</div>
		</div>
	</section>
	<!-- wholesale and retail section -->
	<section class="about-showcase-section py-5">
		<div class="container">
			<!-- Heading & Intro -->
			<div class="row">
				<div class="col-12 text-center mb-4">
					<h2 class="about-showcase-title">Wholesale & Retail Excellence</h2>
					<p class="about-showcase-intro">
						At Demo Traders, we are dedicated resellers committed to enhancing every celebration. Backed
						by decades of industry experience, we offer a curated range of high-quality fireworks—including
						sparklers, rockets, flower pots, ground chakkars, and more—sourced from trusted manufacturers to
						ensure both safety and brilliance.
					</p>

				</div>
			</div>
			<!-- Showcase Cards -->
			<div class="row">
				<div class="col-12 col-md-6 mb-4">
					<div class="showcase-card showcase-wholesale position-relative overflow-hidden rounded">
						<img src="images/wholesale.webp" alt="Wholesale fireworks" class="img-fluid">
						<div class="showcase-overlay">
							<h4 class="text-warning">Wholesale Offers</h4>
							<p>Bulk picks, amazing pricing, and priority access—perfect for large-scale celebrations.
							</p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 mb-4">
					<div class="showcase-card showcase-retail position-relative overflow-hidden rounded">
						<img src="images/retail.webp" alt="Retail fireworks" class="img-fluid">
						<div class="showcase-overlay">
							<h4 class="text-warning">Retail Delights</h4>
							<p>Hand-picked packs, safe sparklers, and family-friendly combos for fade-free fun.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- CTA Button -->
			<div class="row">
				<div class="col-12 text-center mt-3">
					<a href="products.php" class="about-showcase-btn">Explore All Products</a>
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