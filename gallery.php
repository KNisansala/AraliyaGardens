<?php
include_once(dirname(__FILE__) . '/class/include.php');

$PHOTO_ALBUM = new PhotoAlbum(Null);
$photo_albums = $PHOTO_ALBUM->all();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--================ Basic page needs ================-->
        <title>Araliya Gardens | Gallery</title>
        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="Araliya Gardens, truly an amazing place located near beautiful city Hikkaduwa. Featuring free WiFi and a restaurant, Araliya Gardens offers accommodation in Hikkaduwa, 1.5 Km from the Hikkaduwa Beach. The guest house has a year-round outdoor pool and terrace, and guests can enjoy a meal at the restaurant. Free private parking is available on site.">
        <meta name="keywords" content="araliya gardens, araliya gardens gallery, gallery of araliya gardens, villa photos, villa gallery">
        <!--================ Mobile specific metas ================-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--================ Favicon ================-->
        <link rel="shortcut icon" href="images/favicon.png">
        <!--================ Google web fonts ================-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700|Open+Sans:200,300,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Frank+Ruhl+Libre:500">
        <!--================ Vendor CSS ================-->
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/milenia-icon-font.css">
        <link rel="stylesheet" href="vendors/owl-carousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/monkeysan-tooltip/monkeysan-jquery-tooltip.css">
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
            <!--================ Header ================-->
            <?php
            include 'header1.php';
            ?>
            <!--================ End of Header ================-->
            <!--================ Breadcrumb ================-->
            <div data-bg-image-src="images/banner.jpg" class="milenia-breadcrumb text-center milenia-colorizer--scheme-dark milenia-colorizer--parallax">
                <div class="container">
                    <h1 class="milenia-page-title">Gallery</h1>
                    <nav class="milenia-breadcrumb-path">
                        <span><a href="./">Home</a></span>/<span>Gallery</span>
                    </nav>
                </div>
            </div>
            <!--================ End of Breadcrumb ================-->
            <div class="milenia-content  ">
                <div class="container">
                    <div class="row">
                        <main class="col">
                            <div class="milenia-entity-content">
                                <!--================ Content Section ================-->
                                <div class="milenia-section">
                                    <!--================ Gallery ================-->
                                    <div class="milenia-gallery">
                                        <div data-isotope-layout="grid" class="milenia-grid milenia-grid--isotope milenia-grid--cols-3">
                                            <div class="milenia-grid-sizer"></div>
                                            <?php
                                            foreach ($photo_albums as $photo_album) {
                                                ?>
                                                <div class="milenia-grid-item milenia-category-rooms">
                                                    <!--================ Gallery Item ================-->
                                                    <figure class="milenia-gallery-item milenia-gallery-item--with-thumb">
                                                        <a href="upload/photo-album/<?php echo $photo_album['image_name'] ?>" data-fancybox="gallery" data-caption="Nemo Enim Ipsam" class="milenia-ln--independent milenia-gallery-item-link">
                                                            <img src="upload/photo-album/<?php echo $photo_album['image_name'] ?>" alt="">
                                                        </a>
                                                    </figure>
                                                    <!--================ End of Gallery Item ================-->
                                                </div>
                                                    <?php
                                                }
                                                ?>
                                        </div>
                                    </div>
                                    <!--================ End of Gallery ================-->
                                </div>
                            </div>
                        </main>
                    </div>
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
        <script src="vendors/monkeysan.accordion.js"></script>
        <script src="vendors/jquery.parallax-1.1.3.min.js"></script>
        <script src="vendors/monkeysan.tabs.min.js"></script>
        <script src="vendors/monkeysan.sameheight.min.js"></script>
        <script src="vendors/monkeysan-tooltip/monkeysan-jquery-tooltip.js"></script>
        <script src="vendors/isotope.pkgd.min.js"></script>
        <script src="vendors/monkeysan.jquery.nav.1.0.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyDe0Jbcnve8wjMa7p4ZzFpKSxCU8pNUjaw&amp;amp;libraries=geometry&amp;amp;v=3.20"></script>
        <script src="vendors/maplace-0.1.3.min.js"></script>
        <script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
        <script src="vendors/fancybox/jquery.fancybox.min.js"></script>
        <script src="vendors/mediaelement/mediaelement-and-player.min.js"></script>
        <script src="vendors/monkeysan.validator.min.js"></script>
        <script src="vendors/handlebars-v4.0.5.min.js"></script>
        <script src="vendors/mad.customselect.js"></script>
        <script src="vendors/retina.min.js"></script>
        <script src="js/modules/milenia.sidebar-hidden.min.js"></script>
        <script src="js/modules/milenia.alert-box.min.js"></script>
        <script src="js/modules/milenia.isotope.js"></script>
        <script src="js/modules/milenia.tabbed-grid.min.js"></script>
        <script src="js/modules/milenia.sticky-header-section.min.js"></script>
        <script src="js/milenia.app.js"></script>
    </body>
</html>
