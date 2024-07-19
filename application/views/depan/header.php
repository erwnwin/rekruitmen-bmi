<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" rel="icon">
  <link href="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/depan/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/depan/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/depan/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/depan/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/depan/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>assets/font-awesome/css/font-awesome.min.css">
  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/depan/assets/css/style.css" rel="stylesheet">


  <style type="text/css">
    .loader {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url("<?= base_url() ?>assets/loading4.gif") 50% 50% no-repeat rgb(255, 255, 255);
      opacity: 0.9;
      transition: opacity 0.80s, visibility 0.80s;
    }

    .loader--hidden {
      opacity: 0;
      visibility: hidden;
    }

    .loader::after {
      content: "";
      width: 100%;
      height: 100%;
      animation: loading 5.00s ease infinite;
    }
  </style>

  <!-- =======================================================
  * Template Name: eNno
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/enno-free-simple-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<div class="loader">
</div>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <!-- <h1 class="logo"><a href="index.html">eNno</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->

      <a href="<?= base_url('home') ?>" class="logo">
        <img src="<?= base_url() ?>assets/depan/assets/img/logo-bmi.svg" alt="" class="img-fluid">
        <img src="<?= base_url() ?>assets/depan/assets/img/taglines-hd.jpg" alt="" class="img-fluid ml-3 mt-3">
      </a>
      <!-- <a href="index.html" class="logo"><img src="<?= base_url() ?>assets/depan/assets/img/taglines-hd.jpg" alt="" class="img-fluid ml-3 mt-3"></a> -->


      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?= $this->uri->segment(1) == 'home' ? 'active' : '' ?>" href="<?= base_url('home') ?>">Home</a></li>
          <!-- <li><a class="nav-link scrollto" href="<?= base_url('job-vacancy') ?>">Job Vacancy</a></li> -->
          <li><a class="nav-link scrollto <?= $this->uri->segment(1) == 'faq' ? 'active' : '' ?>" href="<?= base_url('faq') ?>">FAQ</a></li>
          <li><a class="nav-link scrollto" href="<?= base_url('login') ?>">Masuk / Daftar</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->