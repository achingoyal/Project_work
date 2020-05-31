<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <!-- Mirrored from demo.hasthemes.com/achin-preview/achin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 May 2020 10:02:27 GMT -->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Creative Website: A Complete Portfolio</title>
        <!--== Favicon ==-->
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
        <!--== Google Fonts ==-->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/app.min.css" />
		 <link rel="stylesheet" href="assets/css/filter.css" />
		 <link rel="stylesheet" href="assets/css/bootstrap.min (1).css" />
		<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	
	
	
	<body class="preloader-active">
        <!--== Start Preloader Content ==-->
        <div class="preloader-wrap">
            <div class="preloader">
                <span class="dot"></span>
                <div class="dots"><span></span> <span></span> <span></span></div>
            </div>
        </div>
		
        <main class="site-wrapper site-wrapper-reveal">
		<!--== End Preloader Content ==--><!--== Start Header Wrapper ==-->
        <?php include 'header.php';?>
		
		
		<?php include 'slider.php';?>
		
<nav class="navbar navbar-dark bg-info mb-5">
  <div class="container">
    <a href="#" class="navbar-brand">Image Filter</a>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-8 m-auto">
      <div class="custom-file mb-3">
        <input type="file" class="custom-file-input" id="upload-file">
        <label for="upload-file" class="custom-file-label">Choose Image</label>
      </div>
      <canvas id="canvas"></canvas>

      <h4 class="text-center my-3">Filters</h4>

      <div class="row my-4 text-center">
        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn brightness-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" disabled>Brightness</button>
            <button class="filter-btn brightness-add btn btn-info">+</button>
          </div>
        </div>

        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn contrast-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" disabled>Contrast</button>
            <button class="filter-btn contrast-add btn btn-info">+</button>
          </div>
        </div>

        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn saturation-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" disabled>Saturation</button>
            <button class="filter-btn saturation-add btn btn-info">+</button>
          </div>
        </div>

        <div class="col-md-3">
          <div class="btn-group btn-group-sm">
            <button class="filter-btn vibrance-remove btn btn-info">-</button>
            <button class="btn btn-secondary btn-disabled" disabled>Vibrance</button>
            <button class="filter-btn vibrance-add btn btn-info">+</button>
          </div>
        </div>
      </div>
      <!-- ./row -->

      <h4 class="text-center my-3">Effects</h4>

      <div class="row mb-3">
        <div class="col-md-3">
          <button class="filter-btn vintage-add btn btn-dark btn-block">
              Vintage
            </button>
        </div>
        <div class="col-md-3">
          <button class="filter-btn lomo-add btn btn-dark btn-block">
              Lomo
            </button>
        </div>
        <div class="col-md-3">
          <button class="filter-btn clarity-add btn btn-dark btn-block">
              Clarity
            </button>
        </div>
        <div class="col-md-3">
          <button class="filter-btn sincity-add btn btn-dark btn-block">
              Sin City
            </button>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <button class="filter-btn crossprocess-add btn btn-dark btn-block">
              Cross Process
            </button>
        </div>
        <div class="col-md-3">
          <button class="filter-btn pinhole-add btn btn-dark btn-block">
              Pinhole
            </button>
        </div>
        <div class="col-md-3">
          <button class="filter-btn nostalgia-add btn btn-dark btn-block">
              Nostalgia
            </button>
        </div>
        <div class="col-md-3">
          <button class="filter-btn hermajesty-add btn btn-dark btn-block">
              Her Majesty
            </button>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-md-6">
          <button id="download-btn" class="btn btn-primary btn-block">Download Image</button>
        </div>
        <div class="col-md-6">
          <button id="revert-btn" class="btn btn-danger btn-block">Remove Filters</button>
        </div>
      </div>
    </div>
  </div>
</div>


<br>

        </main>
        <!--== Start Footer Area Wrapper ==-->
        <?php include 'footer.php' ;?>
       
        <!-- End Off Canvas Menu Wrapper --><!-- Start Search Box Area Wrapper -->
        
        <!-- End Search Box Area Wrapper --><!--=== Start Quick View Content Wrapper ==-->

        <!--=== End Quick View Content Wrapper ==--><!--=======================Javascript============================-->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/camanjs/4.1.2/caman.full.min.js" integrity="sha256-Ttj6Ke2Nzuxi5upPlHetkZxBtdTq0LV1Z6BEUUsKPfs=" crossorigin="anonymous"></script>
        <script src="assets/js/app.min.js"></script>
		<script src="assets/js/filter.js"></script>
    </body>
    <!-- Mirrored from demo.hasthemes.com/achin-preview/achin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 May 2020 10:04:11 GMT -->
</html>
