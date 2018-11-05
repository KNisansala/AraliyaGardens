<!DOCTYPE html>
<html lang="en">
  <head>
    <!--================ Basic page needs ================-->
    <title>Araliya Gardens | About Us</title>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--================ Mobile specific metas ================-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--================ Favicon ================-->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!--================ Google web fonts ================-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700|Open+Sans:200,300,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Frank+Ruhl+Libre:500">
    <!--================ Vendor CSS ================-->
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/milenia-icon-font.css">
    <link rel="stylesheet" href="vendors/owl-carousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/fancybox/jquery.fancybox.min.css">
    <link rel="stylesheet" href="vendors/arcticmodal/jquery.arcticmodal-0.3.css">
    <link rel="stylesheet" href="vendors/mediaelement/mediaelementplayer.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--================ Theme CSS ================-->
    <link rel="stylesheet" href="css/style.css">
    <link href="css/styles.css" rel="stylesheet" type="text/css"/>
    <!--================ Vendor JS ================-->
  </head>
  <body class="milenia-body--scheme-lightbrown">
    <div class="milenia-preloader"></div>
    <!--================ Hidden Sidebar ================--><span class="milenia-sidebar-hidden-overlay"></span>
    <?php
    include 'hidden-sidebar.php';
    ?>
    <!--================ End of Hidden Sidebar ================-->
    <div id="milenia-page-wrapper" class="milenia-page-wrapper">
      <!--================ Search Modal ================-->
      <div class="milenia-d-none">
        <div id="search-modal" class="milenia-modal milenia-modal--search">
          <button type="button" class="milenia-icon-btn arcticmodal-close"><i class="icon icon-cross"></i></button>
          <h3>Find Everything</h3>
          <!--================ Search Form ================-->
          <form role="search" method="get" class="milenia-singlefield-form milenia-form--fields-white milenia-searchform">
            <input type="text" name="s" placeholder="Search">
            <button type="submit"><i class="icon icon-magnifier"></i></button>
          </form>
          <!--================ End of Search Form ================-->
        </div>
      </div>
      <!--================ End of Search Modal ================-->
      <!--================ Header ================-->
      <?php
          include 'header1.php';
      ?>
      <!--================ End of Header ================-->
      <div data-bg-image-src="images/breadcrumb-bg-2.jpg" class="milenia-breadcrumb text-center milenia-colorizer--scheme-dark milenia-colorizer--parallax">
        <div class="container">
          <h1 class="milenia-page-title">About Us</h1>
          <nav class="milenia-breadcrumb-path">
              <span>
                  <a href="./">Home</a>
              </span>/<span>About Us</span>
          </nav>
        </div>
      </div>
      <!--================ End of Breadcrumb ================-->
      <div class="milenia-content">
        <div class="container">
          <!--================ Content Section ================-->
          <section class="milenia-color--black milenia-section--stretched milenia-colorizer--scheme-white">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <h2 class="milenia-section-title milenia-section-title--style-2">About Araliya Gardens</h2>
                <span class="content"><p class="milenia-section-description milenia-section-description--style-2">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.</p></span>
                <span class="content"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris ferme ntum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p></span>
                <span class="content"><p>Integer rutrum ante ue lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque. Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean nec eros. Vestibulum ante ipsum primis in faucibus.</p></span>
              </div>
              <div class="col-lg-6">
                  <figure class="milenia-album">
                  <img src="images/about-image-1.jpg" alt="">
                  </figure>
              </div>
            </div>
          </section>
          <!--================ End of Content Section ================-->
          <!--================ Content Section ================-->
<!--          <div class="milenia-section milenia-section--stretched-content-no-px milenia-section--no-py">
            <div class="owl-carousel owl-carousel--nav-edges owl-carousel--nav-huge owl-carousel--nav-inside owl-carousel--nav-hover-white milenia-simple-slideshow"><img src="images/slide-18.jpg" alt=""><img src="images/slide-19.jpg" alt=""><img src="images/slide-20.jpg" alt=""></div>
          </div>-->
          <!--================ End of Content Section ================-->

          <!--================ Content Section ================-->
<!--          <div class="milenia-section milenia-section--no-py milenia-section--stretched-content-no-px">
            ================ Gallery ================
            <div class="milenia-instafeed">
              <div id="instafeed" data-get="user" data-user="customer" data-limit="6" class="milenia-grid milenia-grid--no-gutters milenia-grid--cols-6"></div>
            </div>
            ================ End of Gallery ================
          </div>-->
          <!--================ End of Content Section ================-->
        </div>
      </div>
      <!--================ Footer ================-->
      <?php
      include 'footer.php';
      ?>
      <!--================ End of Footer ================-->
    </div>
    <script src="vendors/modernizr.js"></script>
    <script src="vendors/jquery-3.3.1.min.js"></script>
    <script src="vendors/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="vendors/jquery.easing.1.3.min.js"></script>
    <script src="vendors/instafeed.min.js"></script>
    <script src="vendors/instafeed.wrapper.min.js"></script>
    <script src="vendors/jquery.parallax-1.1.3.min.js"></script>
    <script src="vendors/monkeysan.sameheight.min.js"></script>
    <script src="vendors/isotope.pkgd.min.js"></script>
    <script src="vendors/monkeysan.jquery.nav.1.0.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
    <script src="vendors/fancybox/jquery.fancybox.min.js"></script>
    <script src="vendors/monkeysan.validator.min.js"></script>
    <script src="vendors/handlebars-v4.0.5.min.js"></script>
    <script src="vendors/mad.customselect.js"></script>
    <script src="vendors/retina.min.js"></script>
    <script src="js/modules/milenia.sidebar-hidden.min.js"></script>
    <script src="js/modules/milenia.newsletter-form.min.js"></script>
    <script src="js/modules/milenia.alert-box.min.js"></script>
    <script src="js/modules/milenia.isotope.js"></script>
    <script src="js/modules/milenia.tabbed-grid.min.js"></script>
    <script src="js/modules/milenia.sticky-header-section.min.js"></script>
    <script src="js/milenia.app.js"></script>
  </body>
</html>
