<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$THINGS_TO_DO = new ThingsToDo($id);

$ThingsToDo = $THINGS_TO_DO->all();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--================ Basic page needs ================-->
        <title>Araliya Gardens | <?php echo $THINGS_TO_DO->title; ?></title>
        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="Araliya Gardens, truly an amazing place located near beautiful city Hikkaduwa. Featuring free WiFi and a restaurant, Araliya Gardens offers accommodation in Hikkaduwa, 1.5 Km from the Hikkaduwa Beach. The guest house has a year-round outdoor pool and terrace, and guests can enjoy a meal at the restaurant. Free private parking is available on site.">
        <meta name="keywords" content="things to do, things to do in hikkaduwa, things to do in sri lanka, araliya gardens, hikkaduwa sri lanka, activities in hikkaduwa, activities in sri lanka, destinations in hikkaduwa, destinations in sri lanka<?php foreach ($ThingsToDo as $things_to_do){ echo ','.$things_to_do['title'];}?>">
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
        <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.min.css">
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
                    <h1 class="milenia-page-title"><?php echo $THINGS_TO_DO->title; ?></h1>
                    <nav class="milenia-breadcrumb-path">
                        <span><a href="./">Home</a></span>
                        /<span><a href="things-to-do.php">Things To Do</a></span>
                        /<span><?php echo $THINGS_TO_DO->title; ?></span>
                    </nav>
                </div>
            </div>
            <!--================ End of Breadcrumb ================-->
            <div class="milenia-content  ">
                <div class="container">
                    <header class="milenia-page-header milenia-entity-single milenia-entity--room">
                        <div class="row align-items-center milenia-columns-aligner--edges-lg">
                            <div class="col-lg-9">
                                <h1><?php echo $THINGS_TO_DO->title; ?></h1>
                            </div>
                            <div class="col-lg-3">
                                <div class="milenia-entity-meta">
                                </div>
                            </div>
                        </div>
                    </header>
                    <!--================ Content Section ================-->
                    <div class="milenia-section milenia-has-sidebar">
                        <div class="row">
                            <main class="col-lg-9 col-md-8 milenia-entity-single milenia-entity--room">
                                <div class="milenia-entity-content">
                                    <div id="simple-slideshow-1" class="owl-carousel milenia-simple-slideshow">
                                        <?php
                                        $photos = ThingsToDoPhoto::getThingsToDoPhotosById($THINGS_TO_DO->id);
                                        foreach ($photos as $photo) {
                                            ?>
                                            <img alt="" src="upload/things-to-do/gallery/<?php echo $photo['image_name']; ?>">
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div data-sync="#simple-slideshow-1" class="owl-carousel owl-carousel--nav-edges owl-carousel--nav-onhover owl-carousel--nav-small milenia-simple-slideshow-thumbs">
                                        <?php
                                        $photos = ThingsToDoPhoto::getThingsToDoPhotosById($THINGS_TO_DO->id);
                                        foreach ($photos as $photo) {
                                            ?>
                                            <img alt="" src="upload/things-to-do/gallery/thumb/<?php echo $photo['image_name']; ?>">
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <div id="tab-description" tabindex="0" role="tabpanel" aria-labelledby="tab-description-link" class="milenia-tab">
                                        <span class="content"><p><?php echo $THINGS_TO_DO->description; ?></p></span>
                                    </div>
                                </div>
                            </main>
                            <!--================ Sidebar ================-->
                            <aside id="milenia-sidebar" class="milenia-sidebar col-lg-3 col-md-4">
                                <div class="milenia-grid">

                                    <!--================ Widget ================-->
                                    <section class="milenia-grid-item milenia-widget">
                                        <div class="milenia-grid-item-inner">
                                            <div class="milenia-grid-item-content">
                                                <h5 class="milenia-widget-title">Other Things To do</h5>
                                                <!--================ Entities ================-->
                                                <div class="milenia-entities milenia-entities--rooms">
                                                    <!--================ Entity ================-->

                                                    <?php
                                                    foreach ($ThingsToDo as $key => $things_to_do) {
                                                        if ($key < 10) {
                                                            ?>
                                                            <article class="milenia-entity">
                                                                <div class="milenia-entity-media">
                                                                    <a href="view-things-to-do.php?id=<?php echo $things_to_do["id"]; ?>" class="milenia-ln--independent">
                                                                        <img alt="" src="upload/things-to-do/<?php echo $things_to_do['image_name'] ?>"></a>
                                                                </div>
                                                                <div class="milenia-entity-content">
                                                                    <div class="milenia-entity-header">
                                                                        <div class="milenia-entity-meta">
                                                                            <div><?php echo substr($things_to_do['short_description'], 0, 20) . '...'; ?></div>
                                                                        </div>
                                                                        <h2 class="milenia-entity-title">
                                                                            <a href="view-things-to-do.php?id=<?php echo $things_to_do["id"]; ?>" class="milenia-color--unchangeable"><?php echo $things_to_do['title']; ?></a>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <?php
                                                        }
                                                    }
                                                    ?>
                                                </div>
                                                <!--================ End of Entities ================-->
                                            </div>
                                        </div>
                                    </section>
                                    <!--================ End of Widget ================-->
                                </div>
                            </aside>
                            <!--================ End of Sidebar ================-->
                        </div>
                    </div>
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
        <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="vendors/momentjs/moment.min.js"></script>
        <script src="vendors/retina.min.js"></script>
        <script src="js/modules/milenia.sidebar-hidden.min.js"></script>
        <script src="js/modules/milenia.alert-box.min.js"></script>
        <script src="js/modules/milenia.isotope.js"></script>
        <script src="js/modules/milenia.tabbed-grid.min.js"></script>
        <script src="js/modules/milenia.sticky-header-section.min.js"></script>
        <script src="js/milenia.app.js"></script>
    </body>
</html>
