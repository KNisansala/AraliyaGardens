<!DOCTYPE html>
<html lang="en">
    <head>
        <!--================ Basic page needs ================-->
        <title>Araliya Gardens | Guest Feedback</title>
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

            <!--================ Breadcrumb ================-->
            <div data-bg-image-src="images/breadcrumb-bg-2.jpg" class="milenia-breadcrumb text-center milenia-colorizer--scheme-dark milenia-colorizer--parallax">
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
            
            <div class="milenia-content milenia-content--no-pb ">
                <div class="container">
                    
                    <!--================ Content Section ================-->
                    <section class="milenia-section milenia-section--py-medium">
                        <div class="row">
                            <div class="col-lg-12">
<!--                                <div class="milenia-section milenia-section--py-medium">
                                    ================ Estimate ================
                                    <div class="milenia-estimate milenia-estimate--horizontal-sm">
                                        <div class="milenia-estimate-mark milenia-aligner milenia-aligner--valign-middle">
                                            <div class="milenia-aligner-outer">
                                                <div class="milenia-aligner-inner">7.0<em class="milenia-estimate-mark-text">Good</em></div>
                                            </div>
                                        </div>
                                        <div class="milenia-estimate-bars">
                                            ================ Progress Bars ================
                                            <div class="milenia-progress-bars milenia-progress-bars--style-2">
                                                <div class="milenia-progress-bars-item"><strong id="progress-bar-title-1" data-value="7.5" class="milenia-progress-bar-title">Accommodation</strong>
                                                    <div role="progressbar" aria-valuenow="7.5" aria-valuemin="0" aria-valuemax="10" aria-labelledby="progress-bar-title-1" class="milenia-progress-bar">
                                                        <div style="width: 75%" class="milenia-progress-bar-indicator"></div>
                                                    </div>
                                                </div>
                                                <div class="milenia-progress-bars-item"><strong id="progress-bar-title-2" data-value="5.5" class="milenia-progress-bar-title">Location</strong>
                                                    <div role="progressbar" aria-valuenow="5.5" aria-valuemin="0" aria-valuemax="10" aria-labelledby="progress-bar-title-2" class="milenia-progress-bar">
                                                        <div style="width: 55%" class="milenia-progress-bar-indicator"></div>
                                                    </div>
                                                </div>
                                                <div class="milenia-progress-bars-item"><strong id="progress-bar-title-3" data-value="9.0" class="milenia-progress-bar-title">Meals</strong>
                                                    <div role="progressbar" aria-valuenow="9.0" aria-valuemin="0" aria-valuemax="10" aria-labelledby="progress-bar-title-3" class="milenia-progress-bar">
                                                        <div style="width: 90%" class="milenia-progress-bar-indicator"></div>
                                                    </div>
                                                </div>
                                                <div class="milenia-progress-bars-item"><strong id="progress-bar-title-4" data-value="6.0" class="milenia-progress-bar-title">Facilities</strong>
                                                    <div role="progressbar" aria-valuenow="6.0" aria-valuemin="0" aria-valuemax="10" aria-labelledby="progress-bar-title-4" class="milenia-progress-bar">
                                                        <div style="width: 60%" class="milenia-progress-bar-indicator"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            ================ End of Progress Bars ================
                                        </div>
                                    </div>
                                    ================ End of Estimate ================
                                </div>-->
                                <div class="milenia-section milenia-section--py-medium">
                                    <h5>Add Your Comment</h5>
                                    <form name="review">
                                        <div class="form-group">
                                            <div class="form-col">
                                                <label for="review_name">Your Name *</label>
                                                <input type="text" id="review_name" name="review_name" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-col">
                                                <label for="review_country">Your Country *</label>
                                                <input type="text" id="review_email" name="review_country" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-col">
                                                <label for="review_image">Profile Picture *</label>
                                                <input type="file" id="review_email" name="review_country" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-col">
                                                <label>Rating</label>
                                                <div class="milenia-rating-field">
                                                    <div data-estimate="4" class="milenia-rating milenia-rating--independent"></div>
                                                    <input type="hidden" name="review_rating" value="4">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-col">
                                                <label for="review_comment">Comment *</label>
                                                <textarea id="review_comment" name="review_comment" rows="4" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-col">
                                                <button type="submit" class="milenia-btn">Submit Review</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="milenia-section milenia-section--py-medium">
                                    <h5>All Reviews</h5>
                                    <ol class="comments-list">
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author-avatar"><a href="#" class="milenia-color--unchangeable"><img src="images/author-image-4.png" alt="Camala Haddon"></a></div>
                                                <div class="comment-author-info">
                                                    <cite class="fn milenia-color--black">Camala Haddon</cite>
                                                    <div class="comment-meta row milenia-columns-aligner--edges-md align-items-center">
                                                        <div class="col-md-8">
                                                            <time datetime="2018-10-17">October 17, 2018 at 2:41 pm</time>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div data-estimate="4" class="milenia-rating milenia-rating--independent"></div>
                                                        </div>
                                                    </div>
                                                    <p>Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author-avatar"><a href="#" class="milenia-color--unchangeable"><img src="images/author-image-5.png" alt="Bradley Grosh"></a></div>
                                                <div class="comment-author-info">
                                                    <cite class="fn milenia-color--black">Bradley Grosh</cite>
                                                    <div class="comment-meta row milenia-columns-aligner--edges-md align-items-center">
                                                        <div class="col-md-8">
                                                            <time datetime="2018-10-17">October 17, 2018 at 2:41 pm</time>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div data-estimate="5" class="milenia-rating milenia-rating--independent"></div>
                                                        </div>
                                                    </div>
                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="comment">
                                            <div class="comment-body">
                                                <div class="comment-author-avatar"><a href="#" class="milenia-color--unchangeable"><img src="images/author-image-2.png" alt="Bradley Grosh"></a></div>
                                                <div class="comment-author-info">
                                                    <cite class="fn milenia-color--black">Ryan Smith</cite>
                                                    <div class="comment-meta row milenia-columns-aligner--edges-md align-items-center">
                                                        <div class="col-md-8">
                                                            <time datetime="2018-10-17">October 17, 2018 at 2:41 pm</time>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div data-estimate="3" class="milenia-rating milenia-rating--independent"></div>
                                                        </div>
                                                    </div>
                                                    <p>ursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
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
    </body>
</html>
