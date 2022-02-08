<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>RSUD PAKUHAJI</title>
    <meta name="keywords" content="Sistem Informasi Pendaftaran Vaksinasi Covid-19">
    <meta name="description" content="RSUD PAKUHAJI">
    <meta name="author" content="Dika Indra">
    <!--Site Icons-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style1.css') ?>">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css') ?>">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start header -->
    <header class="top-navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img src="<?= base_url('assets/img/logo-hst.png') ?>" width="43" height="50" alt="" />
                </a>
                <h1>RUMAH SAKIT UMUM PAKUHAJI KAB. TANGERANG</h1>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbars-rs-food">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('auth/login') ?>">Admin</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('Daftar') ?>">Daftar Vaksinasi</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start slides 
<div id="slides" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/gbr2.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="assets/img/gbr3.jpg" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="assets/img/gbr4.jpg" class="d-block w-100" alt="">
        </div>
        <div class="slides-navigation">
            <a href="#" class="next" data-bs-target="#slides" data-bs-slide="prev"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev" data-bs-target="#slides" data-bs-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
 End slides -->
    <div id="slides" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="assets/img/gbr2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="assets/img/gbr3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="assets/img/gbr4.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>

    <!-- Start About -->
    <div class="about-section-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="<?= base_url('assets/img/gbr1.jpg') ?>" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                    <div class="inner-column">
                        <h1>Selamat Datang Di Website</br> <span>RSUD PAKUHAJI</span></h1>
                        <h4>Little Story</h4>
                        <p>RSUD Pakuhaji adalah rumah sakit umum daerah milik Pemerintah dan merupakan salah satu rumah sakit tipe D yang terletak di wilayah Kabupaten Tangerang, Banten. Rumah sakit ini memberikan pelayanan di bidang kesehatan yang didukung oleh layanan dokter spesialis serta ditunjang dengan fasilitas medis lainnya. Selain itu RSUD Pakuhaji juga sebagai rumah sakit rujukan dari faskes tingkat 1, seperti puskesmas atau klinik. </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About -->



    <!-- Start Footer -->
    <footer class="footer-area bg-f">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h3>About Us</h3>
                    <p>RSUD Pakuhaji adalah rumah sakit umum daerah milik Pemerintah dan merupakan salah satu rumah sakit tipe D yang terletak di wilayah Kabupaten Tangerang, Banten. Rumah sakit ini memberikan pelayanan di bidang kesehatan yang didukung oleh layanan dokter spesialis serta ditunjang dengan fasilitas medis lainnya. Selain itu RSUD Pakuhaji juga sebagai rumah sakit rujukan dari faskes tingkat 1, seperti puskesmas atau klinik.</p>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h3>Contact information</h3>

                    <p class="lead"><a href="#">Telp. (021) 59378771</a></p>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Location</h3>
                    <p class="lead">Jl. KH. Sa'adullah No. 88, Pakuhaji, Tangerang Banten - Indonesia</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.4444951357614!2d106.59001681396592!3d-6.070638195603866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a012f930fc227%3A0x96678393e8f99342!2sRSUD%20Pakuhaji!5e0!3m2!1sid!2sid!4v1630611938289!5m2!1sid!2sid" width="380" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; <script>
                                document.write(new Date().getFullYear());
                            </script> <a href="#">RSUD PAKUHAJI KAB. TANGERANG</a> Design By
                            <a href="">Micod</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <a href="#" id="back-to-top" title="Back to top" style="display:none;">&uarr;</a>
    <!-- End Footer -->
    <!-- ALL JS FILES -->
    <script src="<?= base_url('assets/js/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- ALL PLUGINS -->
    <script src="<?= base_url('assets/js/jquery.superslides.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/images-loded.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/isotope.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/baguetteBox.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/form-validator.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/contact-form-script.js') ?>"></script>
    <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>

</html>