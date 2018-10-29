<!DOCTYPE html>
<html lang="en">
    <head>
        <!--================ Basic page needs ================-->
        <title>Milenia | Grid Blog v3</title>
        <meta charset="UTF-8">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <!--================ Mobile specific metas ================-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--================ Favicon ================-->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!--================ Google web fonts ================-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700|Open+Sans:200,300,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i">
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
                    <h1 class="milenia-page-title">Things To Do</h1>
                    <nav class="milenia-breadcrumb-path"><span><a href="./">Home</a></span>/<span>Things To Do</span>
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
                                    <!--================ Entities (Style 7) ================-->
                                    <div class="milenia-entities milenia-entities--style-7">
                                        <div data-isotope-layout="grid" class="milenia-grid milenia-grid--isotope milenia-grid--cols-3">
                                            <div class="milenia-grid-sizer"></div>
                                            <div class="milenia-grid-item">
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity--format-image milenia-entity">
                                                    <div class="milenia-entity-media">
                                                        <a href="view-things-to-do.php" class="milenia-ln--independent">
                                                            <img src="images/blog-post-image-19.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="milenia-entity-content milenia-aligner">
                                                        <div class="milenia-aligner-outer">
                                                            <div class="milenia-aligner-inner">
                                                                <header class="milenia-entity-header">
                                                                    <h2 class="milenia-entity-title">
                                                                        <a href="view-things-to-do.php" class="milenia-color--unchangeable">Mollit Anim Id</a>
                                                                    </h2>
                                                                </header>
                                                                <div class="milenia-entity-body">
                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                                                </div>
                                                                <footer class="milenia-entity-footer">
                                                                    <a href="view-things-to-do.php" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary">Read More</a>
                                                                </footer>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
                                            </div>
                                            <div class="milenia-grid-item">
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity--format-image milenia-entity">
                                                    <div class="milenia-entity-media">
                                                        <a href="view-things-to-do.php" class="milenia-ln--independent">
                                                            <img src="images/blog-post-image-20.jpg" alt=""></a>
                                                    </div>
                                                    <div class="milenia-entity-content milenia-aligner">
                                                        <div class="milenia-aligner-outer">
                                                            <div class="milenia-aligner-inner">
                                                                <header class="milenia-entity-header">
                                                                    <h2 class="milenia-entity-title">
                                                                        <a href="view-things-to-do.php" class="milenia-color--unchangeable">Esse Cillum Dolore</a>
                                                                    </h2>
                                                                </header>
                                                                <div class="milenia-entity-body">
                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                                                </div>
                                                                <footer class="milenia-entity-footer">
                                                                    <a href="view-things-to-do.php" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary">Read More</a>
                                                                </footer>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
                                            </div>
                                            <div class="milenia-grid-item">
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity--format-image milenia-entity">
                                                    <div class="milenia-entity-media"><a href="view-things-to-do.php" class="milenia-ln--independent">
                                                            <img src="images/blog-post-image-18.jpg" alt=""></a>
                                                    </div>
                                                    <div class="milenia-entity-content milenia-aligner">
                                                        <div class="milenia-aligner-outer">
                                                            <div class="milenia-aligner-inner">
                                                                <header class="milenia-entity-header">
                                                                    <h2 class="milenia-entity-title">
                                                                        <a href="view-things-to-do.php" class="milenia-color--unchangeable">Qui Officia Deserunt</a>
                                                                    </h2>
                                                                </header>
                                                                <div class="milenia-entity-body">
                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                                                </div>
                                                                <footer class="milenia-entity-footer">
                                                                    <a href="view-things-to-do.php" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary">Read More</a>
                                                                </footer>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
                                            </div>
                                            <div class="milenia-grid-item">
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity--format-image milenia-entity">
                                                    <div class="milenia-entity-media">
                                                        <a href="view-things-to-do.php" class="milenia-ln--independent">
                                                            <img src="images/blog-post-image-19.jpg" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="milenia-entity-content milenia-aligner">
                                                        <div class="milenia-aligner-outer">
                                                            <div class="milenia-aligner-inner">
                                                                <header class="milenia-entity-header">
                                                                    <h2 class="milenia-entity-title">
                                                                        <a href="view-things-to-do.php" class="milenia-color--unchangeable">Mollit Anim Id</a>
                                                                    </h2>
                                                                </header>
                                                                <div class="milenia-entity-body">
                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                                                </div>
                                                                <footer class="milenia-entity-footer">
                                                                    <a href="view-things-to-do.php" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary">Read More</a>
                                                                </footer>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
                                            </div>
                                            <div class="milenia-grid-item">
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity--format-image milenia-entity">
                                                    <div class="milenia-entity-media">
                                                        <a href="view-things-to-do.php" class="milenia-ln--independent">
                                                            <img src="images/blog-post-image-20.jpg" alt=""></a>
                                                    </div>
                                                    <div class="milenia-entity-content milenia-aligner">
                                                        <div class="milenia-aligner-outer">
                                                            <div class="milenia-aligner-inner">
                                                                <header class="milenia-entity-header">
                                                                    <h2 class="milenia-entity-title">
                                                                        <a href="view-things-to-do.php" class="milenia-color--unchangeable">Esse Cillum Dolore</a>
                                                                    </h2>
                                                                </header>
                                                                <div class="milenia-entity-body">
                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                                                </div>
                                                                <footer class="milenia-entity-footer">
                                                                    <a href="view-things-to-do.php" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary">Read More</a>
                                                                </footer>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
                                            </div>
                                            <div class="milenia-grid-item">
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity--format-image milenia-entity">
                                                    <div class="milenia-entity-media">
                                                        <a href="view-things-to-do.php" class="milenia-ln--independent">
                                                            <img src="images/blog-post-image-18.jpg" alt=""></a>
                                                    </div>
                                                    <div class="milenia-entity-content milenia-aligner">
                                                        <div class="milenia-aligner-outer">
                                                            <div class="milenia-aligner-inner">
                                                                <header class="milenia-entity-header">
                                                                    <h2 class="milenia-entity-title">
                                                                        <a href="blog_single_post_v1.html" class="milenia-color--unchangeable">Qui Officia Deserunt</a>
                                                                    </h2>
                                                                </header>
                                                                <div class="milenia-entity-body">
                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                                                </div>
                                                                <footer class="milenia-entity-footer">
                                                                    <a href="view-things-to-do.php" class="milenia-btn milenia-btn--link milenia-btn--scheme-primary">Read More</a>
                                                                </footer>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--================ End of Entities (Style 7) ================-->
                                    <!--================ Pagination ================-->
                                    <footer class="text-center">
                                        <nav>
                                            <ul class="milenia-list--unstyled milenia-pagination milenia-pagination--stretched">
                                                <li class="milenia-pagination--pushed-to-left-md"><a href="#" class="prev page-numbers">Previous</a></li>
                                                <li><a href="#" class="page-numbers">1</a></li>
                                                <li><span class="page-numbers current">2</span></li>
                                                <li><a href="#" class="page-numbers">3</a></li>
                                                <li class="milenia-pagination--pushed-to-right-md"><a href="#" class="next page-numbers">Next</a></li>
                                            </ul>
                                        </nav>
                                    </footer>
                                    <!--================ End of Pagination ================-->
                                </div>
                                <!--================ End of Content Section ================-->
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
        <script src="vendors/jquery.parallax-1.1.3.min.js"></script>
        <script src="vendors/monkeysan.sameheight.min.js"></script>
        <script src="vendors/isotope.pkgd.min.js"></script>
        <script src="vendors/monkeysan.jquery.nav.1.0.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
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
        <script src="js/modules/milenia.sticky-header-section.min.js"></script>
        <script src="js/milenia.app.js"></script>
    </body>
</html>
