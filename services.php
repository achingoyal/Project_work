<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <!-- Mirrored from demo.hasthemes.com/arden-preview/arden/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 May 2020 10:07:43 GMT -->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1" />
        <title>Creative World Services</title>
        <!--== Favicon ==-->
        <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
        <!--== Google Fonts ==-->
        <link href="https://fonts.googleapis.com/css?family=Karla:400,400i,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet" />
		<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
        <link rel="stylesheet" href="assets/css/app.min.css" />
		<link rel="stylesheet" href="assets/css/slider.css" />
        <!--[if lt IE 9]>
            <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
		<style>
		.center {
  margin: auto;
  width: 60%;
  border: 3px solid ;
  padding: 30px 0px 0px 40px;
}
</style>
    </head>
    <body class="preloader-active">
        <!--== Start Preloader Content ==-->
        <div class="preloader-wrap">
            <div class="preloader">
                <span class="dot"></span>
                <div class="dots"><span></span> <span></span> <span></span></div>
            </div>
        </div>
		 <?php include 'header.php';?>
        <!--== End Preloader Content ==--><!--== Start Header Wrapper ==-->
		 <main class="site-wrapper site-wrapper-reveal">
       
		<?php include 'banner.php';?>
		<?php include 'about_counter.php';?>
		<?php include 'service1.php';?>
        <!--== End Header Wrapper ==-->
        <?php include 'slider3d.php';?>
		<div class= "center">
		<h3> Get free stuff , Enter this details</h3>
		<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf2fafSbWf7YA63e2kT4aKL6KOMRCeyBIXpiG1oTm2vhHWShg/viewform?embedded=true" width="640" height="800" frameborder="2px" marginheight="0" marginwidth="0">Loading…</iframe>
		
		</div>
		<br>
		</main>
        <!--== Start Footer Area Wrapper ==-->
       <?php include 'footer.php';?>
        <!--=== End Quick View Content Wrapper ==--><!--=======================Javascript============================-->
        <script src="assets/js/app.min.js"></script>
		<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
		 <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 20,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows : true,
      },
	  autoplay: {
        delay: 1000,
        disableOnInteraction: false,
      },
	  loop: true,
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
    </body>
    <!-- Mirrored from demo.hasthemes.com/arden-preview/arden/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 16 May 2020 10:07:45 GMT -->
</html>
