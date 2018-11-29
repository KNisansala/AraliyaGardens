<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$ROOM = new Room($id);
$ROOM_FEATURES = unserialize($ROOM->features);

$rooms = $ROOM->all();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!--================ Basic page needs ================-->
        <title>Araliya Gardens | <?php echo $ROOM->title; ?></title>
        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
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
                    <h1 class="milenia-page-title"><?php echo $ROOM->title; ?></h1>
                    <nav class="milenia-breadcrumb-path">
                        <span><a href="./">Home</a></span>
                        /<span><a href="accommodations.php">Accommodations</a></span>
                        /<span><?php echo $ROOM->title; ?></span>
                    </nav>
                </div>
            </div>
            <!--================ End of Breadcrumb ================-->
            <div class="milenia-content  ">
                <div class="container">
                    <header class="milenia-page-header milenia-entity-single milenia-entity--room">
                        <div class="row align-items-center milenia-columns-aligner--edges-lg">
                            <div class="col-lg-9">
                                <h1><?php echo $ROOM->title; ?></h1>
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
                                        $photos = RoomPhoto::getRoomPhotosById($ROOM->id);
                                        foreach ($photos as $photo) {
                                            ?>
                                            <img src="upload/room/gallery/<?php echo $photo['image_name']; ?>" alt="">
                                            <?php
                                        }
                                        ?> 
                                    </div>
                                    <div data-sync="#simple-slideshow-1" class="owl-carousel owl-carousel--nav-edges owl-carousel--nav-onhover owl-carousel--nav-small milenia-simple-slideshow-thumbs">
                                        <?php
                                        $photos = RoomPhoto::getRoomPhotosById($ROOM->id);
                                        foreach ($photos as $photo) {
                                            ?>
                                            <img src="upload/room/gallery/thumb/<?php echo $photo['image_name']; ?>" alt="">
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <!--================ Tabs ================-->
                                    <div class="milenia-tabs milenia-tabs--style-2 milenia-tabs--tour-sections-lg">
                                        <!--================ Tabs Navigation ================-->
                                        <div role="tablist" aria-label="Tour Sections v1" class="milenia-tabs-nav">
                                            <span class="milenia-active">
                                                <a id="tab-description-link" href="#tab-description" role="tab" aria-selected="false" aria-controls="tab-description" class="milenia-ln--independent milenia-tab-link">Description</a></span>
                                            <span>
                                                <a id="tab-amenities-link" href="#tab-amenities" role="tab" aria-selected="true" aria-controls="tab-amenities" class="milenia-ln--independent milenia-tab-link">Amenities</a>
                                            </span>
<!--                                            <span>
                                                <a id="tab-rates-link" href="#tab-rates" role="tab" aria-selected="false" aria-controls="tab-rates" class="milenia-ln--independent milenia-tab-link">Rates</a>
                                            </span>-->
                                        </div>
                                        <!--================ End of Tabs Navigation ================-->
                                        <!--================ Tabs Container ================-->
                                        <div class="milenia-tabs-container">
                                            <!--================ Tab ================-->
                                            <div id="tab-description" tabindex="0" role="tabpanel" aria-labelledby="tab-description-link" class="milenia-tab">
                                                <span class="content"><p><?php echo $ROOM->description; ?></p></span>
                                                <!--<a href="#" data-fancybox-album-src="[{&quot;src&quot;: &quot;images/floor-plan.png&quot;, &quot;opts&quot;: {&quot;caption&quot;: &quot;The floor plan&quot;}}]" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary">View Floor Plan</a>-->
                                            </div>
                                            <!--================ End of Tab ================-->
                                            <!--================ Tab ================-->
                                            <div id="tab-amenities" tabindex="0" role="tabpanel" aria-labelledby="tab-amenities-link" class="milenia-tab">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <ul class="milenia-list--icon milenia-list--icon-big">
                                                            <?php
                                                            
                                                            foreach ($ROOM_FEATURES as $room_feature) {
                                                                $FEATURES = new RoomFeatures($room_feature);
                                                                ?>
                                                                <li><i class="<?php echo $FEATURES->icon; ?>"></i><?php echo $FEATURES->title; ?></li>
                                                                <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--================ End of Tab ================-->
                                            <!--================ Tab ================-->
                                            <!--                                            <div id="tab-rates" tabindex="0" role="tabpanel" aria-labelledby="tab-rates-link" class="milenia-tab">
                                                                                            <table aria-labelledby="table-label-1" class="milenia-table milenia-table--responsive-lg">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <td data-cell-title="Season" class="milenia-color--black">Main season 1</td>
                                                                                                        <td data-cell-title="Period">10 Mar – 30 Apr 2018</td>
                                                                                                        <td data-cell-title="Price" class="milenia-color--black">$99.00/night</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td data-cell-title="Season" class="milenia-color--black">Christmas &amp; New Year's</td>
                                                                                                        <td data-cell-title="Period">22 Dec 2018 - 6 Jan 2019</td>
                                                                                                        <td data-cell-title="Price" class="milenia-color--black">$299.00/night</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td data-cell-title="Season" class="milenia-color--black">Main season 2</td>
                                                                                                        <td data-cell-title="Period">1 May – 31 Oct 2018</td>
                                                                                                        <td data-cell-title="Price" class="milenia-color--black">$249.00/night</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td data-cell-title="Season" class="milenia-color--black">School holidays</td>
                                                                                                        <td data-cell-title="Period">2 Feb - 9 Mar 2019</td>
                                                                                                        <td data-cell-title="Price" class="milenia-color--black">$199.00/night</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td data-cell-title="Season" class="milenia-color--black">Main season 3</td>
                                                                                                        <td data-cell-title="Period">1 Nov – 21 Dec 2018</td>
                                                                                                        <td data-cell-title="Price" class="milenia-color--black">$129.00/night</td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td data-cell-title="Season" class="milenia-color--black">Weekend only</td>
                                                                                                        <td data-cell-title="Period">Thursday through Sunday</td>
                                                                                                        <td data-cell-title="Price" class="milenia-color--black">$159.00/night</td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table><small id="table-label-1" class="milenia-table-label">All prices are exclusive of GST. 15% Goods and Services tax is applicable above the standard rates.</small>
                                                                                        </div>-->
                                            <!--================ End of Tab ================-->
                                        </div>
                                        <!--================ End of Tabs Container ================-->
                                    </div>
                                    <!--================ End of Tabs ================-->
                                </div>
                            </main>

                            <!--================ Sidebar ================-->
                            <aside id="milenia-sidebar" class="milenia-sidebar col-lg-3 col-md-4">
                                <div class="milenia-grid">

                                    <!--================ Widget ================-->
                                    <section class="milenia-grid-item milenia-widget">
                                        <div class="milenia-grid-item-inner">
                                            <div class="milenia-grid-item-content">
                                                <h5 class="milenia-widget-title">Other Rooms</h5>
                                                <!--================ Entities ================-->
                                                <div class="milenia-entities milenia-entities--rooms">
                                                    <!--================ Entity ================-->
                                                    <?php
                                                    foreach ($rooms as $key => $room) {
                                                        if ($key < 10) {
                                                            ?>
                                                            <article class="milenia-entity">
                                                                <div class="milenia-entity-media">
                                                                    <a href="view-accommodations.php?id=<?php echo $room["id"]; ?>" class="milenia-ln--independent">
                                                                        <img src="upload/room/<?php echo $room['image_name'] ?>" alt=""></a>
                                                                </div>
                                                                <div class="milenia-entity-content">
                                                                    <div class="milenia-entity-header">
                                                                        <div class="milenia-entity-meta">
                                                                            <div>From US$<?php echo $room['price'] ?>/night</div>
                                                                        </div>
                                                                        <h2 class="milenia-entity-title">
                                                                            <a href="view-accommodations.php?id=<?php echo $room["id"]; ?>" class="milenia-color--unchangeable"><?php echo $room['title'] ?></a></h2>
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
        <script src="plugins/fontawesome/js/fontawesome.min.js" type="text/javascript"></script>
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
