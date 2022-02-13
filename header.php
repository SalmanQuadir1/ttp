<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TheTestingPro &#9867; (TTP)</title>
  <meta content="The Testing Pro, makes covid-19 testing easy for you" name="descriptison">
  <meta content="The Testing Pro, Covid-19 test, coronavirus, corona tests, easy testing" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon" type='image/png'> -->
  <link rel='rel' href='favicon.ico' type='image/x-icon'>
  <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'>
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="assets/css/fonts.css" rel="stylesheet">
  <link href="assets/css/fonts2.css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/flatpickr.min.css">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" /> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  
  <script src="assets/vendor/jquery/jquery.min.js"></script>
</head>
<body>        
		
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.php" class="logo mr-auto "><img src="assets/img/TheTestingPro.png" alt="" class="img-fluid" data-aos="zoom-out-down"></a>

      <nav class="main-nav d-none d-lg-block">
        <ul>
          <li class="m1" label="Home"><a href="index.php">Home</a></li>
          <li class="drop-down m1" label="Services"><a href="services.php">Services</a>
            <ul>
              <li class="d-sm-none"><a href="services.php">Services</a></li>
              <!-- <li><a href="pqtc.php">p-Quick Test Centers</a></li> -->
              <li class="drop-down m1" label="p-Quick Test Centers"><a href="pqtc.php">p-Quick Test Centers</a>
                <ul>
                  <li class="d-sm-none"><a href="pqtc.php">p-Quick Test Centers</a></li>              
                  <li><a href="IDRTC.php">IDRTC</a></li>              
                </ul>
              </li>
              <li class="drop-down m1" label="p-Quick Test Centers"><a href="art-pdt.php">ART PDT</a>
                <ul>
                  <li class="d-sm-none"><a href="art-pdt.php">ART PDT</a></li>              
                  <li><a href="book-artpdt.php">Booking ART</a></li>              
                </ul>
              </li>
              <li class="drop-down m1" label="p-Quick Test Centers"><a href="pcr-pdt.php">PCR PDT</a>
                <ul>
                  <li class="d-sm-none"><a href="pcr-pdt.php">PCR PDT</a></li>              
                  <li><a href="book-pcrpdt.php">Booking PCR</a></li>              
                </ul>
              </li>
              <li class="drop-down m1" label="p-Quick Test Centers"><a href="mts.php">Mobile Test</a>
                <ul>
                  <li class="d-sm-none"><a href="mts.php">Mobile Test</a></li>              
                  <li><a href="book-mts.php">Book MTS</a></li>              
                </ul>
              </li>
              <!-- <li><a href="mobile-supervised-self-swab.php">Mobile Supervised Self-Swab</a></li>  -->             
              <!-- <li><a href="art-esss.php">Assisted and Supervised ART Self-Swab</a></li> -->              
            </ul>
          </li>  
          <li class="m1" label="Blog"><a href="blog-home.php">Newsroom</a></li> 
          <li class="drop-down m1" label="Contact"><a href="">Contact</a>  
            <ul>
             <li><a href="contact.php">Contact Us</a></li>
              <li><a href="terms-and-conditions.php">Terms and Conditions</a></li>
              <li><a href="privacy-policy.php">Privacy Policy</a></li>              
            </ul>
          </li>  
          <!-- <li class="m1" label="Blog"><a href="photo-gallery.php">Gallery</a></li>  -->
          <!-- <li><a href="/login">Login</a></li>  -->
          <?php if(isset($_SESSION['user'])) { ?>
            <li><a href="add-blog.php">Add Blog</a></li>
            <li><a href="login.php?logout=true">Logout</a></li>
          <?php } ?>
        </ul>
      </nav><!-- .main-nav-->

    </div>
  </header><!-- End Header -->