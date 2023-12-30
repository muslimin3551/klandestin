<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Site keywords here">
    <meta name="description" content="">
    <meta name='copyright' content=''>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Klandestin.my.id -
        <?= $title ?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('/new_landing/img/favicon.png') ?>">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('/new_landing/css/bootstrap.min.css') ?>">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="<?= base_url('/new_landing/css/nice-select.css') ?>">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?= base_url('/new_landing/css/font-awesome.min.css') ?>">
    <!-- icofont CSS -->
    <link rel="stylesheet" href="<?= base_url('/new_landing/css/icofont.css') ?>">
    <!-- Slicknav -->
    <link rel="stylesheet" href="<?= base_url('/new_landing/css/slicknav.min.css') ?>">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="<?= base_url('/new_landing/css/owl-carousel.css') ?>">
    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="<?= base_url('/new_landing/css/datepicker.css') ?>">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?= base_url('/new_landing/css/animate.min.css') ?>">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?= base_url('/new_landing/css/magnific-popup.css') ?>">

    <!-- Medipro CSS -->
    <link rel="stylesheet" href="<?= base_url('/new_landing/css/normalize.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/new_landing/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('/new_landing/css/responsive.css') ?>">

</head>

<body>

    <!-- Preloader -->
    <div class="preloader">
        <div class="loader">
            <div class="loader-outter"></div>
            <div class="loader-inner"></div>

            <div class="indicator">
                <svg width="16px" height="12px">
                    <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                    <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    <!-- Header Area -->
    <header class="header">
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-12">
                            <!-- Start Logo -->
                            <div class="logo">
                                <a href="<?= base_url() ?>">
                                    <h4><span class="text-primary">Klandestin.my.id</span></h4>
                                </a>
                            </div>
                            <!-- End Logo -->
                            <!-- Mobile Nav -->
                            <div class="mobile-nav"></div>
                            <!-- End Mobile Nav -->
                        </div>
                        <div class="col-lg-7 col-md-9 col-12">
                            <!-- Main Menu -->
                            <div class="main-menu">
                                <nav class="navigation">
                                    <ul class="nav menu">
                                        <li>
                                            <a href="<?= base_url('/#') ?>" onclick="setActive(this.parentNode)">Home</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('/#about') ?>" onclick="setActive(this.parentNode)">About Us</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('/#counselor') ?>" onclick="setActive(this.parentNode)">Counselor</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('/#services') ?>" onclick="setActive(this.parentNode)">Services</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('/#blog') ?>" onclick="setActive(this.parentNode)">Blog</a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('/contact') ?>" onclick="setActive(this.parentNode)">Contact Us</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!--/ End Main Menu -->
                        </div>
                        <div class="col-lg-2 col-12">
                            <div class="get-quote">
                                <a href="<?= base_url('/login') ?>" class="btn">Get Membership</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!-- End Header Area -->
    <!-- Breadcrumbs -->
    <div class="breadcrumbs overlay">
        <div class="container">
            <div class="bread-inner">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                        <ul class="bread-list">
                            <li><a href="index.html">Home</a></li>
                            <li><i class="icofont-simple-right"></i></li>
                            <li class="active">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact Us -->
    <section class="contact-us section">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-us-left">
                            <!--Start Google-map -->
                            <div id="myMap"></div>
                            <!--/End Google-map -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-us-form">
                            <h2>Contact With Us</h2>
                            <p>If you have any questions please fell free to contact with us.</p>
                            <!-- Form -->
                            <form class="form" method="post" action="/contact_message">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" placeholder="Phone" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" placeholder="Subject" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Your Message" id="message" name="message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group login-btn">
                                            <button class="btn" type="submit">Send</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--/ End Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact Us -->

    <!-- Footer Area -->
    <footer id="footer" class="footer ">
        <!-- Footer Top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>About Us</h2>
                            <p>Alamat kampus: Jl. Ciwaru Raya, Cipare, Kec. Serang, Kota Serang, Banten 42117.</p>
                            <!-- Social -->
                            <ul class="social">
                                <li>
                                    <a href="#">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-google-plus"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-vimeo"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont-pinterest"></i>
                                    </a>
                                </li>
                            </ul>
                            <!-- End Social -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer f-link">
                            <h2>Quick Links</h2>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>Home</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-caret-right" aria-hidden="true"></i>Services</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="single-footer">
                            <h2>Newsletter</h2>
                            <p>Dapatakan artikel menarik seputar bullying dan konsultasi dengan memasukan email di bawah ini.</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'" required="" type="email">
                                <button class="button">
                                    <i class="icofont icofont-paper-plane"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Top -->
        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="copyright-content">
                            <p>© Copyright 2024 | All Rights Reserved by
                                <a href="<?= base_url('/') ?>">klandestin.my.id</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Copyright -->
    </footer>
    <!--/ End Footer Area -->

    <!-- jquery Min JS -->
    <script src="<?= base_url('/new_landing/js/jquery.min.js') ?>"></script>
    <!-- jquery Migrate JS -->
    <script src="<?= base_url('/new_landing/js/jquery-migrate-3.0.0.js') ?>"></script>
    <!-- jquery Ui JS -->
    <script src="<?= base_url('/new_landing/js/jquery-ui.min.js') ?>"></script>
    <!-- Easing JS -->
    <script src="<?= base_url('/new_landing/js/easing.js') ?>"></script>
    <!-- Color JS -->
    <script src="<?= base_url('/new_landing/js/colors.js') ?>"></script>
    <!-- Popper JS -->
    <script src="<?= base_url('/new_landing/js/popper.min.js') ?>"></script>
    <!-- Bootstrap Datepicker JS -->
    <script src="<?= base_url('/new_landing/js/bootstrap-datepicker.js') ?>"></script>
    <!-- Jquery Nav JS -->
    <script src="<?= base_url('/new_landing/js/jquery.nav.js') ?>"></script>
    <!-- Slicknav JS -->
    <script src="<?= base_url('/new_landing/js/slicknav.min.js') ?>"></script>
    <!-- ScrollUp JS -->
    <script src="<?= base_url('/new_landing/js/jquery.scrollUp.min.js') ?>"></script>
    <!-- Niceselect JS -->
    <script src="<?= base_url('/new_landing/js/niceselect.js') ?>"></script>
    <!-- Tilt Jquery JS -->
    <script src="<?= base_url('/new_landing/js/tilt.jquery.min.js') ?>"></script>
    <!-- Owl Carousel JS -->
    <script src="<?= base_url('/new_landing/js/owl-carousel.js') ?>"></script>
    <!-- counterup JS -->
    <script src="<?= base_url('/new_landing/js/jquery.counterup.min.js') ?>"></script>
    <!-- Steller JS -->
    <script src="<?= base_url('/new_landing/js/steller.js') ?>"></script>
    <!-- Wow JS -->
    <script src="<?= base_url('/new_landing/js/wow.min.js') ?>"></script>
    <!-- Magnific Popup JS -->
    <script src="<?= base_url('/new_landing/js/jquery.magnific-popup.min.js') ?>"></script>
    <!-- Counter Up CDN JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?= base_url('/new_landing/js/bootstrap.min.js') ?>"></script>
    <!-- Main JS -->
    <script src="<?= base_url('/new_landing/js/main.js') ?>"></script>
    <!-- Google Map API Key JS -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
    <!-- Gmaps JS -->
    <script src="<?= base_url('/new_landing/js/gmaps.min.js') ?>"></script>
    <!-- Map Active JS -->
    <script src="<?= base_url('/new_landing/js/map-active.js') ?>"></script>
    <!-- Bootstrap JS -->
</body>
<script>
    // Set "Home" as the default active link
    document.addEventListener("DOMContentLoaded", function() {
        setActive(document.querySelector('a[href="#"]').parentNode);
    });

    // Function to set active class on clicked list item
    function setActive(clickedElement) {
        // Remove active class from all list items
        var listItems = document.querySelectorAll('.nav.menu li');
        listItems.forEach(function(li) {
            li.classList.remove('active');
        });

        // Add active class to the clicked list item
        clickedElement.classList.add('active');
    }
</script>

</html>