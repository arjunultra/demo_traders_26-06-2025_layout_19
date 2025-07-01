<!-- Topbar Marquee -->
<!-- Marquee Topbar -->
<div id="headerTop" class="para-font sparkle-header-topbar py-2 text-center marquee-left">
    <i class="bi bi-stars text-warning"></i>Diwali sale is open now. Buy early for the best discounts! Happy
    Diwali...!!!!
    &nbsp; <i class="bi bi-whatsapp text-success"></i> +91 9999999999
    &nbsp; <i class="bi bi-telephone text-primary"></i> +91 8888888888, +91 7777777777
</div>
<!-- Header Section -->
<header class="pyro-header">
    <!-- Logo + Navigation -->
    <div class="pyro-main-nav py-5">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-lg-3 col-md-6 col-8 text-center">
                    <a href="index.php">
                        <img src="images/logo.png" alt="Nav Logo" class="img-fluid">
                    </a>
                </div>

                <!-- Navigation -->
                <div class="col-lg-6 d-none d-lg-block bg-purple rounded-pill">
                    <nav class="pyro-navbar">
                        <ul class="nav justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link <?php if ($page == 'home')
                                    echo 'active'; ?>" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($page == 'about')
                                    echo 'active'; ?>" href="about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($page == 'products')
                                    echo 'active'; ?>" href="products.php">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($page == 'safetytips')
                                    echo 'active'; ?>" href="safetytips.php">Safety Tips</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if ($page == 'contact')
                                    echo 'active'; ?>" href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <!-- Mobile Menu Trigger -->
                <div class="col-lg-3 col-md-6 col-4 text-right">
                    <button class="btn btn-light d-lg-none" data-toggle="modal" data-target="#mobileMenu">
                        <i class="bi bi-list"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Mobile Offcanvas -->
<div class="modal fade pyro-offcanvas-menu" id="mobileMenu" tabindex="-1" aria-labelledby="mobileMenuLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <img src="images/logo.png" alt="Demo Traders" class="img-fluid">
                </h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <nav class="nav flex-column">
                    <a class="nav-link <?php if ($page == 'home')
                        echo 'active'; ?>" href="index.php">Home</a>
                    <a class="nav-link <?php if ($page == 'about')
                        echo 'active'; ?>" href="about.php">About</a>
                    <a class="nav-link <?php if ($page == 'products')
                        echo 'active'; ?>" href="products.php">Products</a>
                    <a class="nav-link <?php if ($page == 'safetytips')
                        echo 'active'; ?>" href="safetytips.php">Safety
                        Tips</a>
                    <a class="nav-link <?php if ($page == 'contact')
                        echo 'active'; ?>" href="contact.php">Contact</a>
                </nav>
                <hr>
                <div>
                    <p><i class="bi bi-geo-alt-fill"></i>Demo Traders,No: XXX, Crackle Lane, Sivakasi</p>
                    <p><i class="bi bi-envelope-fill"></i> support@pyroblast.com</p>
                    <p><i class="bi bi-telephone-fill"></i> +91 99999 99999</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/marquee.js"></script>
<script>
    $('.marquee-left').marquee({
        duration: 16000,
        gap: 150,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: false,
        pauseOnHover: true
    });
</script>