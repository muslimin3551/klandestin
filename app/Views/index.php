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
                                <a href="#">
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
                                            <a href="#" onclick="setActive(this.parentNode)">Home</a>
                                        </li>
                                        <li>
                                            <a href="#about" onclick="setActive(this.parentNode)">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#counselor" onclick="setActive(this.parentNode)">Counselor</a>
                                        </li>
                                        <li>
                                            <a href="#services" onclick="setActive(this.parentNode)">Services</a>
                                        </li>
                                        <li>
                                            <a href="#blog" onclick="setActive(this.parentNode)">Blog</a>
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

    <!-- Slider Area -->
    <section class="slider">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-8 pt-5 pb-5">
                    <div class="text">
                        <h1>Selamat Datang di
                            <span>Website</span>
                            kami
                            <span>Klandestin.my.id!</span>
                        </h1>
                        <br>
                        <br>
                        <p>
                            Selamat datang di platform kami yang bertujuan untuk membantu para korban dalam bentuk bullying. Laporkan segala tindakan yang merugikan melalui fitur pengaduan kami. Bersama kita bisa menciptakan komunitas yang ramah dan mendukung.
                        </p>
                        <br>
                        <br>
                        <div class="button">
                            <a href="#about" class="btn primary text-light">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="<?= base_url('/img/klandestin/slide1.jpg') ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <!--/ End Slider Area -->

    <!-- Start Why choose -->
    <section class="why-choose section mt-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>About Us</h2>
                        <img src="<?= base_url('new_landing/img/section-img.png') ?>" alt="#">
                        <p>Kami Adalah protal untuk anda yang terkena bullying agar dapat pulih dari rasa trauma yang anda alami</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3>BE KIND BULLYING IS FOR LOSERS</h3>
                        <p> Hai SobatKala menjadi seseorang yang pernah mengalami pembullyan sudah pasti sangat berat. kami ingin berbagi inspirasi untuk pesan menarik di situs Kami! Banyak dari kita yang mungkin terkadang kesulitan membuka suara tentang kejadian yang sudah kita alami, disini kami bersedia menjadi tempat bercerita.
                        </p>
                        <p>Kalian bisa memanfaatkan fitur Menfes Secret Box untuk berbagi kisah kalian, yang mana fitur ini juga bisa mengubungkan kalian dengan SobatKala yang lain. Lalu ada juga fitur Layanan Individual untuk penanganan lebih lanjut.</p>
                        <p>“Bullying adalah tindakan kelemahan,bukan kekuatan. Jika kamu kuat gunakan kekuatanmu untuk melindungi dan mengangkat orang lain.”</p>
                    </div>
                    <!-- End Choose Left -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Rights -->
                    <div class="choose-right">
                        <img src="<?= base_url('/img/klandestin/about_us.jpg') ?>" alt="">
                    </div>
                    <!-- End Choose Rights -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Why choose -->

    <!-- Start portfolio -->
    <section class="portfolio section" id="counselor">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Meet Our Counselor</h2>
                        <img src="<?= base_url('new_landing/img/section-img.png') ?>" alt="#">
                        <p>Tenaga ahli yang akan membantu anda dan siap mendengarkan anda!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="owl-carousel portfolio-slider">
                        <?php foreach ($counselors as $item) { ?>
                            <div class="card border-0" style="width: 20rem;">
                                <img src="<?= base_url('uploads/') . $item['photos'] ?>" class="card-img-top" alt="..." style="max-height: 250px;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $item['name'] ?></h5>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><span class="badge bg-primary text-light">Counselor</span></li>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End portfolio -->

    <!-- Pricing Table -->
    <section class="pricing-table section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Services</h2>
                        <img src="<?= base_url('new_landing/img/section-img.png') ?>" alt="#">
                        <p>Berikut beberapa paket membership yang tersedia di platform kami!</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont icofont-ui-cut"></i>
                            </div>
                            <h4 class="title">Paket kenalan</h4>
                            <div class="price">
                                <p class="amount">Rp 7000<span>/ Per 7 Hari</span>
                                </p>
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li>
                                <i class="icofont icofont-ui-check"></i>konseling selama 3 hari
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>Kami menjunjung tinggi asas kerahasiaan.
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>Ceritakan permasalahan yang sedang kamu hadapi.
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>kita cari solusi bersama Konselor.
                            </li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="#">Book Now</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->
                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont icofont-ui-cut"></i>
                            </div>
                            <h4 class="title">Paket kenalan</h4>
                            <div class="price">
                                <p class="amount">Rp 12000<span>/ Per 3 Hari</span>
                                </p>
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li>
                                <i class="icofont icofont-ui-check"></i>konseling selama 7 hari
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>Kami menjunjung tinggi asas kerahasiaan.
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>Ceritakan permasalahan yang sedang kamu hadapi.
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>kita cari solusi bersama Konselor.
                            </li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="#">Book Now</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->
                <!-- Single Table -->
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="single-table">
                        <!-- Table Head -->
                        <div class="table-head">
                            <div class="icon">
                                <i class="icofont icofont-ui-cut"></i>
                            </div>
                            <h4 class="title">Paket kenalan</h4>
                            <div class="price">
                                <p class="amount">Rp 15000<span>/ Per 10 Hari</span>
                                </p>
                            </div>
                        </div>
                        <!-- Table List -->
                        <ul class="table-list">
                            <li>
                                <i class="icofont icofont-ui-check"></i>konseling selama 10 hari
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>Kami menjunjung tinggi asas kerahasiaan.
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>Ceritakan permasalahan yang sedang kamu hadapi.
                            </li>
                            <li>
                                <i class="icofont icofont-ui-check"></i>kita cari solusi bersama Konselor.
                            </li>
                        </ul>
                        <div class="table-bottom">
                            <a class="btn" href="#">Book Now</a>
                        </div>
                        <!-- Table Bottom -->
                    </div>
                </div>
                <!-- End Single Table-->
            </div>
        </div>
    </section>
    <!--/ End Pricing Table -->

    <!-- Start Blog Area -->
    <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Keep up with Our Most Recent Bullying News.</h2>
                        <img src="<?= base_url('new_landing/img/section-img.png') ?>" alt="#">
                        <p>Update artikel tetang bullying dan solusi untuk mengatasinya</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php foreach ($articles as $article) { ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Single Blog -->
                        <div class="single-news" style="min-height: 600px;">
                            <div class="news-head" style="max-height: 250px;min-height: 200px;">
                                <img src="<?= base_url('uploads/article/') . $article['photo'] ?>" alt="#">
                            </div>
                            <div class="news-body">
                                <div class="news-content">
                                    <?php
                                    $createdAt = $article['created_at'];
                                    $formattedDate = date('Y. F j', strtotime($createdAt));
                                    ?>
                                    <div class="date"><?= $formattedDate ?></div>
                                    <h2>
                                        <a href="<?= base_url('/article/') . $article['id'] ?>"><?= $article['title'] ?></a>
                                    </h2>
                                    <p class="text"><?= $article['sort_description'] ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

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