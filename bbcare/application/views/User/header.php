<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  
  <link href="<?=base_url('assets/utama/img/favicon.png');?>" rel="icon">
  <link href="<?=base_url('assets/utama/img/apple-touch-icon.png');?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?=base_url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i'); ?>" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url('assets/utama/vendor/animate.css/animate.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('assets/utama/vendor/aos/aos.css');?>" rel="stylesheet">
  <link href="<?=base_url('assets/utama/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('assets/utama/vendor/bootstrap-icons/bootstrap-icons.css');?>" rel="stylesheet">
  <link href="<?=base_url('assets/utama/vendor/boxicons/css/boxicons.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('assets/utama/vendor/fontawesome-free/css/all.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('assets/utama/vendor/glightbox/css/glightbox.min.css');?>" rel="stylesheet">
  <link href="<?=base_url('assets/utama/vendor/swiper/swiper-bundle.min.css');?>" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url('assets/utama/css/style.css');?>" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.1.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Senin - Minggu, 08.00 - 20.00 WIB
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Hubungi Kami Sekarang 0821-1506-7755
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo me-auto"><img src="<?=base_url('assets/utama/img/logok.png'); ?>" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="<?=base_url('home/index');?>" >Beranda</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url('home/tentang');?>" >Tentang</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url('home/layanan');?>" >Layanan</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url('home/daftar_pekerja');?>" >Daftar Pekerja</a></li>
          <li><a class="nav-link scrollto" href="<?=base_url('home/kontak');?>" >Kontak</a></li>
          <li class="dropdown"><a href="#"><span>Akun</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('login');?>">Masuk Log</a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a> -->
                <!-- <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul> -->
              <!-- </li> -->
              <li><a href="<?=base_url('Login/register');?>">Daftar Pelanggan</a></li>
              <li><a href="#">Daftar Pengasuh</a></li>
              <li><a href="#">Daftar CV</a></li>
            </ul>
          </li> 
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Pesan Sekarang</span> Juga</a>

    </div>
  </header><!-- End Header -->
