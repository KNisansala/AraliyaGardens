<?php
include_once(dirname(__FILE__) . '/class/include.php');

$COMMENT = new Comments(Null);
$comments = $COMMENT->all();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--================ Basic page needs ================-->
        <title>Araliya Gardens | Guest Feedback</title>
        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="description" content="Araliya Gardens, truly an amazing place located near beautiful city Hikkaduwa. Featuring free WiFi and a restaurant, Araliya Gardens offers accommodation in Hikkaduwa, 1.5 Km from the Hikkaduwa Beach. The guest house has a year-round outdoor pool and terrace, and guests can enjoy a meal at the restaurant. Free private parking is available on site.">
        <meta name="keywords" content="araliya gardens, guest feedback araliya gardens, guest feedback, araliya gardens guest feedback">
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
        <link rel="stylesheet" href="vendors/revolution/css/settings.css">
        <link rel="stylesheet" href="vendors/revolution/css/layers.min.css">
        <link rel="stylesheet" href="vendors/revolution/css/navigation.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--================ Theme CSS ================-->
        <link rel="stylesheet" href="css/style.css">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <link href="feedback-form/style.css" rel="stylesheet" type="text/css"/>
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
                    <h1 class="milenia-page-title">Guest Feedback</h1>
                    <nav class="milenia-breadcrumb-path">
                        <span>
                            <a href="./">Home</a>
                        </span>/<span>Guest Feedback</span>
                    </nav>
                </div>
            </div>
            <!--================ End of Breadcrumb ================-->

            <div class="milenia-content1 milenia-content--no-pb ">
                <div class="container">

                    <!--================ Content Section ================-->
                    <section class="milenia-section">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="milenia-section milenia-section--py-medium">
                                    <div class="panel panel-white2 post panel-shadow">
                                        <h3>Add Your Comment</h3>
                                        <div id="guestcomment">
                                            <div class="milenia-contact-form milenia-form--fields-white">
                                                <div class="form-group">
                                                    <div class="form-col">
                                                        <label>Your Name *</label>
                                                        <input type="text" name="txtFullName" id="txtFullName" class="form-control input-validater">
                                                        <span id="spanFullName" ></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-col">
                                                        <label>Your Country *</label>
                                                        <input type="text" name="txtCountry" id="txtCountry" class="form-control input-validater">
                                                        <span id="spanCountry" ></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-col">
                                                        <label>Profile Picture *</label>
                                                        <input type="file" id="txtprofileimg" name="txtprofileimg" class="form-control input-validater">
                                                        <span id="spanprofileimg" ></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-col">
                                                        <label>Comment *</label>
                                                        <textarea id="txtMessage" name="txtMessage" rows="4" class="form-control input-validater"></textarea>
                                                        <span id="spanMessage" ></span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-md-6">
                                                        <label for="comment" id="form-label" class="lb-top">Security Code:<span class="red">*</span></label>
                                                        <input type="text" name="captchacode" id="captchacode" class="input-validater" placeholder="Security code >> ">
                                                        <span id="capspan" ></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label></label>
                                                        <span><?php include("./feedback-form/captchacode-widget.php"); ?></span>
                                                    </div> 
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-col">
                                                        <button type="submit" name="btnSubmit" id="btnSubmit" class="milenia-btn milenia-btn--scheme-primary">Submit Review</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="milenia-section milenia-section--py-medium review-top">
                                    <h3>All Reviews</h3>
                                    <div class="milenia-entities milenia-entities--style-6">
                                        <div class="milenia-grid milenia-grid--cols-1">
                                            <?php
                                            foreach ($comments as $comment) {
                                                ?>
                                                <div class="milenia-grid-item">
                                                    <!--================ Entity ================-->
                                                    <article class="milenia-entity milenia-entity--format-image">
                                                        <div class="milenia-entity-content milenia-aligner panel panel-white2 post panel-shadow">
                                                            <div class="milenia-aligner-outer">
                                                                <div class="milenia-aligner-inner">
                                                                    <div class="milenia-entity-body">
                                                                        <p><?php echo $comment['comment']; ?></p>
                                                                    </div>
                                                                    <header class="milenia-entity-header">

                                                                        <div class="comment-author-info">
                                                                            <cite class="fn milenia-color--black"><?php echo $comment['name']; ?></cite>
                                                                        </div>

                                                                        <div class="milenia-entity-meta">
                                                                            <div><?php echo $comment['title']; ?></div>
                                                                        </div>

                                                                    </header>
                                                                    <footer class="milenia-entity-footer">
                                                                        <div class="comment-author-avatar">
                                                                            <a href="#" class="milenia-color--unchangeable">
                                                                                <img src="upload/comments/<?php echo $comment['image_name'] ?>" class="milenia-author-photo">
                                                                            </a>
                                                                        </div>
                                                                    </footer>
                                                                    <div data-estimate="5" class="milenia-rating milenia-text-color--primary"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <!--================ End of Entity ================-->
                                                </div>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!--================ End of Content Section ================-->
                    <!--================ Content Section ================-->
                    <div class="milenia-section milenia-section--stretched-content-no-px milenia-section--no-py">
                        <!--================ Entities (Style 2) ================-->

                        <!--================ End of Entities (Style 2) ================-->
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
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="vendors/retina.min.js"></script>
        <script src="js/modules/milenia.sidebar-hidden.min.js"></script>
        <script src="js/modules/milenia.alert-box.min.js"></script>
        <script src="js/modules/milenia.isotope.js"></script>
        <script src="js/modules/milenia.tabbed-grid.min.js"></script>
        <script src="js/modules/milenia.sticky-header-section.min.js"></script>
        <script src="js/milenia.app.js"></script>
        <script src="js/create-guest-comment.js" type="text/javascript"></script>
    </body>
</html>
