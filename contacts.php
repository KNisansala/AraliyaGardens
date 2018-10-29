<!DOCTYPE html>
<html lang="en">
    <head>
        <!--================ Basic page needs ================-->
        <title>Araliya Gardens | Contact Us</title>
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
        <link rel="stylesheet" href="vendors/fancybox/jquery.fancybox.min.css">
        <link rel="stylesheet" href="vendors/arcticmodal/jquery.arcticmodal-0.3.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--================ Theme CSS ================-->
        <link rel="stylesheet" href="css/style.css">
        <!--================ Vendor JS ================-->
    </head>
    <body class="milenia-body--scheme-lightbrown milenia-body--border-layout">
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
            <div data-bg-image-src="images/breadcrumb-bg-2.jpg" class="milenia-breadcrumb text-center milenia-colorizer--scheme-dark">
                <div class="container">
                    <h1 class="milenia-page-title">Contact Us</h1>
                    <nav class="milenia-breadcrumb-path"><span><a href="./">Home</a></span>/<span>Contact Us</span>
                    </nav>
                </div>
            </div>
            <!--================ End of Breadcrumb ================-->
            <div class="milenia-content milenia-content--no-pt ">
                <div class="container">
                    <!--================ Section ================-->
                    <div class="milenia-section">
                        <div class="row">
                            <main class="col-lg-4">
                                <h3>Contact Details</h3>
                                <!--================ Google Map ================-->
                                <div id="gmap-1" data-height="340px" data-locations="[{&quot;lat&quot;: 40.7707307, &quot;lon&quot;: -74.0210859, &quot;icon&quot;: &quot;images/marker-blue.png&quot;, &quot;title&quot;: &quot;Main office&quot;}]" class="milenia-gmap"></div>
                                <!--================ End of Google Map ================-->
                                <ul class="milenia-details-list milenia-list--unstyled">
                                    <li><span class="milenia-tc--dark">Address:&nbsp;</span>9863 - 9867 Mill Road, Cambridge, MG09 99HT</li>
                                    <li><span class="milenia-tc--dark">Phone:&nbsp;</span>+1 800 603 6035</li>
                                    <li><span class="milenia-tc--dark">Fax:&nbsp;</span>+1 800 889 9898</li>
                                    <li><span class="milenia-tc--dark">Email:&nbsp;</span><a href="mailto:#">mail@companyname.com</a></li>
                                    <li><span class="milenia-tc--dark">Stay Connected:</span>
                                        <ul class="milenia-social-icons">
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                            <li><a href="#"><i class="fab fa-tripadvisor"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                            <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </main>
                            <aside class="col log-8">
                                <h3>We'd Love To Hear From You!</h3>
                                <p>Feel free to send us any questions you may have. We are happy to answer them.</p>
                                <form novalidate class="milenia-contact-form milenia-form--fields-white">
                                    <div class="form-group">
                                        <div class="form-col">
                                            <label for="cf_name">Your Name</label>
                                            <input type="text" id="cf_name" name="cf_name" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-col">
                                            <label for="cf_email">Your Email</label>
                                            <input type="email" id="cf_email" name="cf_email" required class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-col">
                                            <label for="cf_phone">Phone</label>
                                            <input type="text" id="cf_phone" name="cf_phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-col">
                                            <label for="cf_message">Message</label>
                                            <textarea id="cf_message" name="cf_message" required rows="7" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-col">
                                            <button type="submit" class="milenia-btn">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </aside>
                        </div>
                    </div>
                    <!--================ End of Section ================-->
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
        <script src="vendors/monkeysan.jquery.nav.1.0.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyDe0Jbcnve8wjMa7p4ZzFpKSxCU8pNUjaw&amp;amp;libraries=geometry&amp;amp;v=3.20"></script>
        <script src="vendors/maplace-0.1.3.min.js"></script>
        <script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
        <script src="vendors/fancybox/jquery.fancybox.min.js"></script>
        <script src="vendors/monkeysan.validator.min.js"></script>
        <script src="vendors/handlebars-v4.0.5.min.js"></script>
        <script src="vendors/mad.customselect.js"></script>
        <script src="vendors/retina.min.js"></script>
        <script src="js/modules/milenia.newsletter-form.min.js"></script>
        <script src="js/modules/milenia.contact-form.js"></script>
        <script src="js/modules/milenia.sidebar-hidden.min.js"></script>
        <script src="js/modules/milenia.alert-box.min.js"></script>
        <script src="js/modules/milenia.sticky-header-section.min.js"></script>
        <script src="js/milenia.app.js"></script>
    </body>
</html>