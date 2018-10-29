<!DOCTYPE html>
<html lang="en">
    <head>
        <!--================ Basic page needs ================-->
        <title>Milenia | Rooms Layout v1</title>
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
        <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--================ Theme CSS ================-->
        <link rel="stylesheet" href="css/style.css">
        <!--================ Vendor JS ================-->
        
        <!--================ Theme CSS ================-->
        <link rel="stylesheet" href="css/style.css">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        
        
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
                    <h1 class="milenia-page-title">Accommodations</h1>
                    <nav class="milenia-breadcrumb-path">
                        <span><a href="./">Home</a></span>/<span>Accommodations</span>
                    </nav>
                </div>
            </div>
            <!--================ End of Breadcrumb ================-->
            <div class="milenia-content  milenia-has-sidebar">
                <div class="container">
                    <div class="row">
                        <main class="col-lg-9 col-md-8">
                            <div class="milenia-entity-content">
                                <!--================ Content Section ================-->
                                <div class="milenia-section">
                                    <!--================ Entities (Style 15) ================-->
                                    <div class="milenia-entities milenia-entities--style-15">
                                        <div class="milenia-grid milenia-grid--cols-1">
                                            <div class="milenia-grid-item">
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity">
                                                    <div class="milenia-entity-media">
                                                        <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                                                            <div data-bg-image-src="images/rooms-list-image-9.jpg" class="milenia-entity-slide"></div>
                                                            <div data-bg-image-src="images/rooms-list-image-10.jpg" class="milenia-entity-slide"></div>
                                                            <div data-bg-image-src="images/rooms-list-image-11.jpg" class="milenia-entity-slide"></div>
                                                        </div>
                                                    </div>
                                                    <div class="milenia-entity-content milenia-aligner">
                                                        <div class="milenia-aligner-outer">
                                                            <div class="milenia-aligner-inner">
                                                                <header class="milenia-entity-header">
                                                                    <div class="milenia-entity-meta">
                                                                        <div>from  <strong class='milenia-entity-price'>$99.00</strong>/night</div>
                                                                    </div>
                                                                    <h2 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable">Classic Balcony Room</a></h2>
                                                                </header>
                                                                <div class="milenia-entity-body">
                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis.</p>
                                                                </div>
                                                                <footer class="milenia-entity-footer"><a href="#" class="milenia-btn">Details</a><a href="#" class="milenia-btn milenia-btn--scheme-primary">Book Now</a></footer>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
                                            </div>
                                            <div class="milenia-grid-item">
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity">
                                                    <div class="milenia-entity-media">
                                                        <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                                                            <div data-bg-image-src="images/rooms-list-image-12.jpg" class="milenia-entity-slide"></div>
                                                            <div data-bg-image-src="images/rooms-list-image-10.jpg" class="milenia-entity-slide"></div>
                                                            <div data-bg-image-src="images/rooms-list-image-11.jpg" class="milenia-entity-slide"></div>
                                                        </div>
                                                    </div>
                                                    <div class="milenia-entity-content milenia-aligner">
                                                        <div class="milenia-aligner-outer">
                                                            <div class="milenia-aligner-inner">
                                                                <header class="milenia-entity-header">
                                                                    <div class="milenia-entity-meta">
                                                                        <div>from  <strong class='milenia-entity-price'>$199.00</strong>/night</div>
                                                                    </div>
                                                                    <h2 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable">Superior Double Room</a></h2>
                                                                </header>
                                                                <div class="milenia-entity-body">
                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                                                </div>
                                                                <footer class="milenia-entity-footer"><a href="#" class="milenia-btn">Details</a><a href="#" class="milenia-btn milenia-btn--scheme-primary">Book Now</a></footer>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
                                            </div>
                                            <div class="milenia-grid-item">
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity">
                                                    <div class="milenia-entity-media">
                                                        <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                                                            <div data-bg-image-src="images/rooms-list-image-13.jpg" class="milenia-entity-slide"></div>
                                                            <div data-bg-image-src="images/rooms-list-image-11.jpg" class="milenia-entity-slide"></div>
                                                            <div data-bg-image-src="images/rooms-list-image-12.jpg" class="milenia-entity-slide"></div>
                                                        </div>
                                                    </div>
                                                    <div class="milenia-entity-content milenia-aligner">
                                                        <div class="milenia-aligner-outer">
                                                            <div class="milenia-aligner-inner">
                                                                <header class="milenia-entity-header">
                                                                    <div class="milenia-entity-meta">
                                                                        <div>from  <strong class='milenia-entity-price'>$299.00</strong>/night</div>
                                                                    </div>
                                                                    <h2 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable">Superior Balcony Double Room</a></h2>
                                                                </header>
                                                                <div class="milenia-entity-body">
                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                                                </div>
                                                                <footer class="milenia-entity-footer"><a href="#" class="milenia-btn">Details</a><a href="#" class="milenia-btn milenia-btn--scheme-primary">Book Now</a></footer>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
                                            </div>
                                            <div class="milenia-grid-item">
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity">
                                                    <div class="milenia-entity-media">
                                                        <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                                                            <div data-bg-image-src="images/rooms-list-image-8.jpg" class="milenia-entity-slide"></div>
                                                            <div data-bg-image-src="images/rooms-list-image-11.jpg" class="milenia-entity-slide"></div>
                                                            <div data-bg-image-src="images/rooms-list-image-12.jpg" class="milenia-entity-slide"></div>
                                                        </div>
                                                    </div>
                                                    <div class="milenia-entity-content milenia-aligner">
                                                        <div class="milenia-aligner-outer">
                                                            <div class="milenia-aligner-inner">
                                                                <header class="milenia-entity-header">
                                                                    <div class="milenia-entity-meta">
                                                                        <div>from  <strong class='milenia-entity-price'>$399.00</strong>/night</div>
                                                                    </div>
                                                                    <h2 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable">Delux Double Room</a></h2>
                                                                </header>
                                                                <div class="milenia-entity-body">
                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                                                </div>
                                                                <footer class="milenia-entity-footer"><a href="#" class="milenia-btn">Details</a><a href="#" class="milenia-btn milenia-btn--scheme-primary">Book Now</a></footer>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
                                            </div>
                                            <div class="milenia-grid-item">
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity">
                                                    <div class="milenia-entity-media">
                                                        <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                                                            <div data-bg-image-src="images/rooms-list-image-14.jpg" class="milenia-entity-slide"></div>
                                                            <div data-bg-image-src="images/rooms-list-image-10.jpg" class="milenia-entity-slide"></div>
                                                            <div data-bg-image-src="images/rooms-list-image-9.jpg" class="milenia-entity-slide"></div>
                                                        </div>
                                                    </div>
                                                    <div class="milenia-entity-content milenia-aligner">
                                                        <div class="milenia-aligner-outer">
                                                            <div class="milenia-aligner-inner">
                                                                <header class="milenia-entity-header">
                                                                    <div class="milenia-entity-meta">
                                                                        <div>from  <strong class='milenia-entity-price'>$499.00</strong>/night</div>
                                                                    </div>
                                                                    <h2 class="milenia-entity-title"><a href="#" class="milenia-color--unchangeable">Grand Deluxe Room</a></h2>
                                                                </header>
                                                                <div class="milenia-entity-body">
                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                                                </div>
                                                                <footer class="milenia-entity-footer"><a href="#" class="milenia-btn">Details</a><a href="#" class="milenia-btn milenia-btn--scheme-primary">Book Now</a></footer>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--================ End of Entities (Style 15) ================-->
                                    <!--================ Pagination ================-->
                                    <footer class="text-center">
                                        <nav>
                                            <ul class="milenia-pagination milenia-list--unstyled milenia-pagination--stretched">
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
                        <!--================ Sidebar ================-->
                        <aside id="milenia-sidebar" class="milenia-sidebar col-lg-3 col-md-4">
                            <div class="milenia-grid">
                                <!--================ Widget ================-->
                                <section class="milenia-grid-item milenia-widget milenia-widget--check-availability">
                                    <div class="milenia-grid-item-inner">
                                        <div class="milenia-grid-item-content">
                                            <div class="milenia-colorizer--scheme-dark">
                                                <h5 class="milenia-widget-title">Check Availability</h5><small class="form-caption">Required fields are followed by *</small>
                                                <form class="milenia-booking-form milenia-booking-form--style-3">
                                                    <div class="form-group">
                                                        <div class="form-col form-col--location">
                                                            <div class="form-control">
                                                                <label>Select Hotel Location</label><span class="milenia-field-datepicker milenia-field-datepicker--style-3 milenia-field-datepicker--location">Rome, Italy</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-col form-col--arrival-date">
                                                            <div class="form-control">
                                                                <label for="booking-form-arrival-date-3">Arrival Date *</label><span class="milenia-field-datepicker milenia-field-datepicker--style-3">Monday 15th April, 2019</span>
                                                                <input type="text" id="booking-form-arrival-date-3" name="booking-form-arrival-date-3" class="milenia-datepicker milenia-field-datepicker-invoker">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-col form-col--departure-date">
                                                            <div class="form-control">
                                                                <label for="booking-form-departure-date-3">Departure Date *</label><span class="milenia-field-datepicker milenia-field-datepicker--style-3">Saturday 27th April, 2019</span>
                                                                <input type="text" id="booking-form-departure-date-3" name="booking-form-arrival-date-3" class="milenia-datepicker milenia-field-datepicker-invoker">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-col-6">
                                                            <div class="form-control">
                                                                <label>Room Type</label>
                                                                <div class="milenia-custom-select">
                                                                    <select data-default-text="Classic">
                                                                        <option>Classic</option>
                                                                        <option>Double</option>
                                                                        <option>Delux</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-col-6">
                                                            <div class="form-control">
                                                                <label>Rooms</label>
                                                                <div class="milenia-custom-select">
                                                                    <select data-default-text="1">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-col-6">
                                                            <div class="form-control">
                                                                <label>Adults</label>
                                                                <div class="milenia-custom-select">
                                                                    <select data-default-text="1">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-col-6">
                                                            <div class="form-control">
                                                                <label>Children</label>
                                                                <div class="milenia-custom-select">
                                                                    <select data-default-text="1">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option>4</option>
                                                                        <option>5</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-col">
                                                            <div class="form-control">
                                                                <label>Price Per Night</label>
                                                                <div class="milenia-range-slider-field">
                                                                    <input type="text" value="$99-$999" name="check_availability_price" readonly class="milenia-range-slider-input">
                                                                    <div class="milenia-range-slider"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-col">
                                                            <div class="form-control">
                                                                <label class="milenia-toggled-fields-invoker milenia-toggled-fields-invoker--opened">Facility</label>
                                                                <div style="display: block;" class="milenia-toggled-fields">
                                                                    <input type="checkbox" name="checkbox-1" id="checkbox-1">
                                                                    <label for="checkbox-1" class="milenia-label-checkbox">Air conditioner</label>
                                                                    <input type="checkbox" name="checkbox-2" id="checkbox-2" checked="checked">
                                                                    <label for="checkbox-2" class="milenia-label-checkbox">Balcony</label>
                                                                    <input type="checkbox" name="checkbox-3" id="checkbox-3" checked="checked">
                                                                    <label for="checkbox-3" class="milenia-label-checkbox">Family rooms</label>
                                                                    <input type="checkbox" name="checkbox-4" id="checkbox-4">
                                                                    <label for="checkbox-4" class="milenia-label-checkbox">Fitness center</label>
                                                                    <input type="checkbox" name="checkbox-5" id="checkbox-5">
                                                                    <label for="checkbox-5" class="milenia-label-checkbox">Flat-screen TV</label>
                                                                    <input type="checkbox" name="checkbox-6" id="checkbox-6">
                                                                    <label for="checkbox-6" class="milenia-label-checkbox">Free WiFi</label>
                                                                    <input type="checkbox" name="checkbox-7" id="checkbox-7">
                                                                    <label for="checkbox-7" class="milenia-label-checkbox">Non-smoking rooms</label>
                                                                    <input type="checkbox" name="checkbox-8" id="checkbox-8">
                                                                    <label for="checkbox-8" class="milenia-label-checkbox">Parking</label>
                                                                    <input type="checkbox" name="checkbox-9" id="checkbox-9">
                                                                    <label for="checkbox-9" class="milenia-label-checkbox">Pets allowed</label>
                                                                    <input type="checkbox" name="checkbox-10" id="checkbox-10">
                                                                    <label for="checkbox-10" class="milenia-label-checkbox">Rooms service</label>
                                                                    <input type="checkbox" name="checkbox-11" id="checkbox-11">
                                                                    <label for="checkbox-11" class="milenia-label-checkbox">Spa &amp; wellness center</label>
                                                                    <input type="checkbox" name="checkbox-12" id="checkbox-12">
                                                                    <label for="checkbox-12" class="milenia-label-checkbox">Swimming pool</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="form-col form-col--action">
                                                            <div class="form-control">
                                                                <button type="submit" class="milenia-btn milenia-btn--huge milenia-btn--scheme-primary">Check Availability</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!--================ End of Widget ================-->
                                <!--================ Widget ================-->
                                <div class="milenia-grid-item milenia-widget">
                                    <div class="milenia-grid-item-inner">
                                        <div class="milenia-grid-item-content">
                                            <!--================ Banners ================-->
                                            <div class="milenia-banners milenia-banners--style-2">
                                                <div class="milenia-grid milenia-grid--cols-1">
                                                    <div class="milenia-grid-item">
                                                        <!--================ Banner ================-->
                                                        <article class="milenia-banner">
                                                            <div data-bg-image-src="images/banner-image-14.jpg" class="milenia-banner-media"><img src="images/banner-image-14.jpg" alt=""></div>
                                                            <div class="milenia-banner-content milenia-aligner">
                                                                <div class="milenia-aligner-outer">
                                                                    <div class="milenia-aligner-inner">
                                                                        <div class="milenia-banner-text">
                                                                            <h2 class="milenia-banner-title milenia-color--unchangeable">Offers &amp; Packages</h2>
                                                                            <p>Donec eget tellus non erat lacinia fermentum. Donec in velit vel ipsum auctor pulvinar.</p>
                                                                        </div>
                                                                        <div class="milenia-banner-actions"><a href="#" class="milenia-btn milenia-btn--link milenia-btn--scheme-inherit">Explore More</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </article>
                                                        <!--================ End of Banner ================-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--================ End of Banners ================-->
                                        </div>
                                    </div>
                                </div>
                                <!--================ End of Widget ================-->
                                <!--================ Widget ================-->
                                <section class="milenia-grid-item milenia-widget">
                                    <div class="milenia-grid-item-inner">
                                        <div class="milenia-grid-item-content">
                                            <h5 class="milenia-widget-title">Other Accommodations</h5>
                                            <!--================ Entities ================-->
                                            <div class="milenia-entities">
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity">
                                                    <div class="milenia-entity-media"><a href="blog_single_post_v1.html" class="milenia-ln--independent"><img src="images/blog-post-image-1-100x78.jpg" alt=""></a></div>
                                                    <div class="milenia-entity-content">
                                                        <div class="milenia-entity-header">
                                                            <div class="milenia-entity-meta">
                                                                <div>
                                                                    <time datetime="2018-11-28">November 28, 2018</time>
                                                                </div>
                                                                <div>in
                                                                    <div class="milenia-entity-categories"><span><a href="#" class="milenia-color--unchangeable">Sights</a></span></div>
                                                                </div>
                                                            </div>
                                                            <h2 class="milenia-entity-title"><a href="blog_single_post_v1.html" class="milenia-color--unchangeable">Ut Tellus Dolor Dapibus Eget</a></h2>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity">
                                                    <div class="milenia-entity-media"><a href="blog_single_post_v1.html" class="milenia-ln--independent"><img src="images/blog-post-image-2-100x78.jpg" alt=""></a></div>
                                                    <div class="milenia-entity-content">
                                                        <div class="milenia-entity-header">
                                                            <div class="milenia-entity-meta">
                                                                <div>
                                                                    <time datetime="2018-11-19">November 19, 2018</time>
                                                                </div>
                                                                <div>in
                                                                    <div class="milenia-entity-categories"><span><a href="#" class="milenia-color--unchangeable">News</a></span></div>
                                                                </div>
                                                            </div>
                                                            <h2 class="milenia-entity-title"><a href="blog_single_post_v1.html" class="milenia-color--unchangeable">Vivamus Eget Nibh</a></h2>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
                                                <!--================ Entity ================-->
                                                <article class="milenia-entity">
                                                    <div class="milenia-entity-media"><a href="blog_single_post_v1.html" class="milenia-ln--independent"><img src="images/blog-post-image-3-100x78.jpg" alt=""></a></div>
                                                    <div class="milenia-entity-content">
                                                        <div class="milenia-entity-header">
                                                            <div class="milenia-entity-meta">
                                                                <div>
                                                                    <time datetime="2018-11-08">November 8, 2018</time>
                                                                </div>
                                                                <div>in
                                                                    <div class="milenia-entity-categories"><span><a href="#" class="milenia-color--unchangeable">Tips</a></span></div>
                                                                </div>
                                                            </div>
                                                            <h2 class="milenia-entity-title"><a href="blog_single_post_v1.html" class="milenia-color--unchangeable">Nemo Enim Ipsam Voluptatem</a></h2>
                                                        </div>
                                                    </div>
                                                </article>
                                                <!--================ End of Entity ================-->
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