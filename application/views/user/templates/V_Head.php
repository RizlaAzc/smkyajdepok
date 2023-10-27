  <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title; ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('assets/user/');?>img/smk.png" rel="icon">
  <link href="<?= base_url('assets/user/');?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('assets/user/');?>vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/user/');?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/user/');?>vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/user/');?>vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/user/');?>vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/user/');?>vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('assets/user/');?>css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eBusiness
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    /*--------------------------------------------------------------
  # Home Section
  --------------------------------------------------------------*/
  #home {
    width: 100%;
    height: 100vh;
    background: #000;
    overflow: hidden;
    position: relative;
  }

  @media (max-height: 500px) {
    #home {
      height: 150vh;
    }
  }

  #home .carousel,
  #home .carousel-inner,
  #home .carousel-item,
  #home .carousel-item::before {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
  }

  #home .carousel-item {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  #home .carousel-item::before {
    content: "";
    background-color: rgba(0, 0, 0, 0.7);
  }

  #home .carousel-container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 70px;
    left: 50px;
    right: 50px;
  }

  #home .container {
    text-align: center;
  }

  #home h2 {
    color: #fff;
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: 700;
  }

  @media (max-width: 768px) {
    #home h2 {
      font-size: 20px;
      line-height: 1.2;
    }
  }

  #home p {
    width: 80%;
    font-size: 38px;
    line-height: 1.2;
    margin: 0 auto 30px auto;
    color: #fff;
  }

  @media (min-width: 1024px) {
    #home p {
      width: 60%;
    }
  }

  @media (max-width: 768px) {
    #home p {
      font-size: 28px;
      line-height: 1.2;
    }
  }

  #home .carousel-fade {
    overflow: hidden;
  }

  #home .carousel-fade .carousel-inner .carousel-item {
    transition-property: opacity;
  }

  #home .carousel-fade .carousel-inner .carousel-item,
  #home .carousel-fade .carousel-inner .active.carousel-item-start,
  #home .carousel-fade .carousel-inner .active.carousel-item-end {
    opacity: 0;
  }

  #home .carousel-fade .carousel-inner .active,
  #home .carousel-fade .carousel-inner .carousel-item-next.carousel-item-start,
  #home .carousel-fade .carousel-inner .carousel-item-prev.carousel-item-end {
    opacity: 1;
    transition: 0.5s;
  }

  #home .carousel-fade .carousel-inner .carousel-item-next,
  #home .carousel-fade .carousel-inner .carousel-item-prev,
  #home .carousel-fade .carousel-inner .active.carousel-item-start,
  #home .carousel-fade .carousel-inner .active.carousel-item-end {
    left: 0;
    transform: translate3d(0, 0, 0);
  }

  #home .carousel-control-prev,
  #home .carousel-control-next {
    width: 10%;
  }

  @media (min-width: 1024px) {

    #home .carousel-control-prev,
    #home .carousel-control-next {
      width: 5%;
    }
  }

  #home .carousel-control-next-icon,
  #home .carousel-control-prev-icon {
    background: none;
    font-size: 32px;
    line-height: 1;
  }

  #home .carousel-indicators li {
    cursor: pointer;
    list-style-type: none;
  }

  #home .btn-get-started {
    font-weight: 500;
    font-size: 16px;
    letter-spacing: 1px;
    display: inline-block;
    padding: 8px 32px;
    border-radius: 50px;
    transition: 0.5s;
    margin: 10px;
    color: #fff;
    background: #3ec1d5;
  }

  #home .btn-get-started:hover {
    background: #fff;
    color: #3ec1d5;
  }

  .team-bg {
  background: url(../img/background/page-header.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top center;
  padding: 120px 0 60px;
}

.team-bg::before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.7);
}

@media (min-width: 1025px) {
  .team-bg {
    background-attachment: fixed;
  }
}
  </style>
  
</head>