<!DOCTYPE html>
<html lang="en">
    <head>
        <!--================ Basic page needs ================-->
        <title>Milenia | Home</title>
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
        <link rel="stylesheet" href="vendors/revolution/css/settings.css">
        <link rel="stylesheet" href="vendors/revolution/css/layers.min.css">
        <link rel="stylesheet" href="vendors/revolution/css/navigation.min.css">
        <link rel="stylesheet" href="vendors/jquery-ui/jquery-ui.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!--================ Theme CSS ================-->
        <link rel="stylesheet" href="css/style.css">
        <link href="css/styles.css" rel="stylesheet" type="text/css"/>
        <!--================ Vendor JS ================-->
    </head>
    <body class="milenia-body--scheme-lightbrown">
        <div class="milenia-preloader"></div>

        <!--================ Hidden Sidebar ================-->
        <span class="milenia-sidebar-hidden-overlay"></span>
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
            include 'header.php';
            ?>
            <!--================ End of Header ================-->
            
            <!--================ Slider Revolution ================-->
            <?php
            include 'slider.php';
            ?>
            <!--================ End of Slider Revolution ================-->
            <div class="milenia-content milenia-content--no-py ">
                <div class="container">
                    <div class="row">
                        <main class="col">
                            <div class="milenia-entity-content">
                                <!--================ Content Section ================-->
<!--                                <div class="milenia-section milenia-section--no-py">
                                    <form class="milenia-booking-form milenia-booking-form--style-1">
                                        <div class="form-group">
                                            <div class="form-col form-col--arrival-date">
                                                <div class="form-control">
                                                    <label for="booking-form-arrival-date">Arrival Date</label><span class="milenia-field-datepicker milenia-field-datepicker--style-1"><span class="milenia-field-datepicker-day">15</span><span class="milenia-field-datepicker-others"><span class="milenia-field-datepicker-month-year">April, 2019</span><span class="milenia-field-datepicker-dayname">Monday</span></span></span>
                                                    <input type="text" id="booking-form-arrival-date" name="booking-form-arrival-date" class="milenia-datepicker milenia-field-datepicker-invoker">
                                                </div>
                                            </div>
                                            <div class="form-col form-col--departure-date">
                                                <div class="form-control">
                                                    <label for="booking-form-departure-date">Departure Date</label><span class="milenia-field-datepicker milenia-field-datepicker--style-1"><span class="milenia-field-datepicker-day">27</span><span class="milenia-field-datepicker-others"><span class="milenia-field-datepicker-month-year">April, 2019</span><span class="milenia-field-datepicker-dayname">Saturday</span></span></span>
                                                    <input type="text" id="booking-form-departure-date" name="booking-form-arrival-date" class="milenia-datepicker milenia-field-datepicker-invoker">
                                                </div>
                                            </div>
                                            <div class="form-col form-col--adults">
                                                <div class="form-control">
                                                    <label>Adults</label>
                                                    <div class="milenia-field-counter">
                                                        <div class="milenia-field-counter-value">1</div>
                                                        <input type="hidden" name="booking-form-adults" value="1" class="milenia-field-counter-target">
                                                        <button type="button" class="milenia-field-counter-control milenia-field-counter-control--decrease"></button>
                                                        <button type="button" class="milenia-field-counter-control milenia-field-counter-control--increase"></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-col form-col--children">
                                                <div class="form-control">
                                                    <label>Children</label>
                                                    <div class="milenia-field-counter">
                                                        <div class="milenia-field-counter-value">0</div>
                                                        <input type="hidden" name="booking-form-children" value="0" class="milenia-field-counter-target">
                                                        <button type="button" class="milenia-field-counter-control milenia-field-counter-control--decrease"></button>
                                                        <button type="button" class="milenia-field-counter-control milenia-field-counter-control--increase"></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-col form-col--action">
                                                <div class="form-control">
                                                    <button type="submit" class="milenia-btn milenia-btn--huge milenia-btn--scheme-primary">Check Availability</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>-->
                                <!--================ End of Content Section ================-->
                                <!--================ Content Section Welcome================-->
                                <section class="milenia-section milenia-colorizer--scheme-white">
                                    <div class="row align-items-center">
                                        <div class="col-lg-5">
                                            <h6 class="milenia-section-subtitle milenia-color--unchangeable">Welcome To</h6>
                                            <h2 class="milenia-section-title">Araliya Gardens Hotel</h2>
                                            <p class="milenia-section-description milenia-section-description--style-2">Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. </p>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris ferme ntum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. </p>
                                            <div class="milenia-sign"><img src="images/sign-1.png" alt=""><small>Managing Director</small></div>
                                        </div>
                                        <div class="col-lg-6 offset-lg-1">
                                            <figure class="milenia-album"><img src="images/single-gallery-image-1.jpg" alt="">
                                                <div class="milenia-action-buttons"><a href="#" role="button" data-fancybox-album-src="[{&quot;src&quot;: &quot;images/rooms-list-image-18.jpg&quot;, &quot;opts&quot;: {&quot;caption&quot;: &quot;Caption 1&quot;}}, {&quot;src&quot;: &quot;images/rooms-list-image-15.jpg&quot;, &quot;opts&quot;: {&quot;caption&quot;: &quot;Caption 2&quot;}}, {&quot;src&quot;: &quot;images/rooms-list-image-16.jpg&quot;, &quot;opts&quot;: {&quot;caption&quot;: &quot;Caption 3&quot;}}]" class="milenia-ln--independent"><i class="icon icon-pictures"></i></a><a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" data-fancybox class="milenia-ln--independent"><i class="icon icon-camera-play"></i></a></div>
                                            </figure>
                                        </div>
                                    </div>
                                </section>
                                <!--================ End of Content Section Welcome ================-->
                                
                                <!--================ Content Section Rooms ================-->
                                <section class="milenia-section milenia-color--black milenia-section--stretched milenia-colorizer--scheme-lightest">
                                    <h6 class="milenia-section-subtitle milenia-color--unchangeable text-center">The pleasure of luxury</h6>
                                    <h2 class="milenia-section-title text-center">Rooms &amp; Suites</h2>
                                    <!--================ Tabs ================-->
                                    <div class="milenia-tabs milenia-tabs--unstyled">
                                        <!--================ Tabs Navigation ================-->
                                        <ul role="tablist" aria-label="Tabs v1" class="text-center milenia-filter-wrap milenia-tabs-nav milenia-filter milenia-list--unstyled">
                                            <li class="milenia-active"><a id="tab-1-link" href="#tab-1" role="tab" aria-selected="false" aria-controls="tab-1" class="milenia-tab-link">All</a></li>
                                            <li><a id="tab-2-link" href="#tab-2" role="tab" aria-selected="true" aria-controls="tab-2" class="milenia-tab-link">Classic</a></li>
                                            <li><a id="tab-3-link" href="#tab-3" role="tab" aria-selected="false" aria-controls="tab-3" class="milenia-tab-link">Superior</a></li>
                                            <li><a id="tab-4-link" href="#tab-4" role="tab" aria-selected="false" aria-controls="tab-4" class="milenia-tab-link">Delux</a></li>
                                            <li><a id="tab-5-link" href="#tab-5" role="tab" aria-selected="false" aria-controls="tab-5" class="milenia-tab-link">Master</a></li>
                                        </ul>
                                        <!--================ End of Tabs Navigation ================-->
                                        <!--================ Tabs Container ================-->
                                        <div class="milenia-tabs-container">
                                            <!--================ Tab ================-->
                                            <div id="tab-1" tabindex="0" role="tabpanel" aria-labelledby="tab-1-link" class="milenia-tab">
                                                <!--================ Tabbed Carousel ================-->
                                                <div class="milenia-tabbed-carousel">
                                                    <!--================ Entities (Style 15) ================-->
                                                    <div class="milenia-entities milenia-entities--style-15 milenia-entities--with-tabbed-grid">
                                                        <div id="milenia-grid-tabbed-1" class="milenia-grid milenia-grid--cols-1 milenia-grid--tabbed milenia-grid--tabbed-loading">
                                                            <div class="milenia-grid-item">
                                                                <!--================ Entity ================-->
                                                                <article class="milenia-entity">
                                                                    <div class="milenia-entity-media">
                                                                        <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget.</p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-18.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-20.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-21.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                    <!--================ Thumbnails ================-->
                                                    <div class="milenia-tabbed-carousel-thumbs">
                                                        <div data-tabbed-sync="milenia-grid-tabbed-1" class="milenia-grid milenia-grid--cols-4 owl-carousel--nav-onhover owl-carousel owl-carousel--nav-edges owl-carousel--nav-small">
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Classic Balcony Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-18.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Superior Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Superior Balcony Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-20.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Delux Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-21.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Grand Deluxe Room</figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--================ End of Thumbnails ================-->
                                                </div>
                                            </div>
                                            <!--================ End of Tab ================-->
                                            <!--================ Tab ================-->
                                            <div id="tab-2" tabindex="0" role="tabpanel" aria-labelledby="tab-2-link" class="milenia-tab">
                                                <!--================ Tabbed Carousel ================-->
                                                <div class="milenia-tabbed-carousel">
                                                    <!--================ Entities (Style 15) ================-->
                                                    <div class="milenia-entities milenia-entities--style-15 milenia-entities--with-tabbed-grid">
                                                        <div id="milenia-grid-tabbed-2" class="milenia-grid milenia-grid--cols-1 milenia-grid--tabbed milenia-grid--tabbed-loading">
                                                            <div class="milenia-grid-item">
                                                                <!--================ Entity ================-->
                                                                <article class="milenia-entity">
                                                                    <div class="milenia-entity-media">
                                                                        <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                                                                            <div data-bg-image-src="images/rooms-list-image-18.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-20.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-21.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget.</p>
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
                                                    <!--================ Thumbnails ================-->
                                                    <div class="milenia-tabbed-carousel-thumbs">
                                                        <div data-tabbed-sync="milenia-grid-tabbed-2" class="milenia-grid milenia-grid--cols-4 owl-carousel--nav-onhover owl-carousel owl-carousel--nav-edges owl-carousel--nav-small">
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-18.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Superior Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Superior Balcony Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-20.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Delux Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-21.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Grand Deluxe Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Classic Balcony Room</figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--================ End of Thumbnails ================-->
                                                </div>
                                            </div>
                                            <!--================ End of Tab ================-->
                                            <!--================ Tab ================-->
                                            <div id="tab-3" tabindex="0" role="tabpanel" aria-labelledby="tab-3-link" class="milenia-tab">
                                                <!--================ Tabbed Carousel ================-->
                                                <div class="milenia-tabbed-carousel">
                                                    <!--================ Entities (Style 15) ================-->
                                                    <div class="milenia-entities milenia-entities--style-15 milenia-entities--with-tabbed-grid">
                                                        <div id="milenia-grid-tabbed-3" class="milenia-grid milenia-grid--cols-1 milenia-grid--tabbed milenia-grid--tabbed-loading">
                                                            <div class="milenia-grid-item">
                                                                <!--================ Entity ================-->
                                                                <article class="milenia-entity">
                                                                    <div class="milenia-entity-media">
                                                                        <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                                                                            <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-20.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-21.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget.</p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-18.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                    <!--================ Thumbnails ================-->
                                                    <div class="milenia-tabbed-carousel-thumbs">
                                                        <div data-tabbed-sync="milenia-grid-tabbed-3" class="milenia-grid milenia-grid--cols-4 owl-carousel--nav-onhover owl-carousel owl-carousel--nav-edges owl-carousel--nav-small">
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Superior Balcony Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-20.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Delux Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-21.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Grand Deluxe Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Classic Balcony Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-18.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Superior Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--================ End of Thumbnails ================-->
                                                </div>
                                            </div>
                                            <!--================ End of Tab ================-->
                                            <!--================ Tab ================-->
                                            <div id="tab-4" tabindex="0" role="tabpanel" aria-labelledby="tab-4-link" class="milenia-tab">
                                                <!--================ Tabbed Carousel ================-->
                                                <div class="milenia-tabbed-carousel">
                                                    <!--================ Entities (Style 15) ================-->
                                                    <div class="milenia-entities milenia-entities--style-15 milenia-entities--with-tabbed-grid">
                                                        <div id="milenia-grid-tabbed-4" class="milenia-grid milenia-grid--cols-1 milenia-grid--tabbed milenia-grid--tabbed-loading">
                                                            <div class="milenia-grid-item">
                                                                <!--================ Entity ================-->
                                                                <article class="milenia-entity">
                                                                    <div class="milenia-entity-media">
                                                                        <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                                                                            <div data-bg-image-src="images/rooms-list-image-20.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-21.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget.</p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-18.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                    <!--================ Thumbnails ================-->
                                                    <div class="milenia-tabbed-carousel-thumbs">
                                                        <div data-tabbed-sync="milenia-grid-tabbed-4" class="milenia-grid milenia-grid--cols-4 owl-carousel--nav-onhover owl-carousel owl-carousel--nav-edges owl-carousel--nav-small">
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-20.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Delux Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-21.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Grand Deluxe Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Classic Balcony Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-18.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Superior Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Superior Balcony Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--================ End of Thumbnails ================-->
                                                </div>
                                            </div>
                                            <!--================ End of Tab ================-->
                                            <!--================ Tab ================-->
                                            <div id="tab-5" tabindex="0" role="tabpanel" aria-labelledby="tab-5-link" class="milenia-tab">
                                                <!--================ Tabbed Carousel ================-->
                                                <div class="milenia-tabbed-carousel">
                                                    <!--================ Entities (Style 15) ================-->
                                                    <div class="milenia-entities milenia-entities--style-15 milenia-entities--with-tabbed-grid">
                                                        <div id="milenia-grid-tabbed-5" class="milenia-grid milenia-grid--cols-1 milenia-grid--tabbed milenia-grid--tabbed-loading">
                                                            <div class="milenia-grid-item">
                                                                <!--================ Entity ================-->
                                                                <article class="milenia-entity">
                                                                    <div class="milenia-entity-media">
                                                                        <div class="owl-carousel owl-carousel--vadaptive milenia-simple-slideshow">
                                                                            <div data-bg-image-src="images/rooms-list-image-21.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget.</p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-18.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-17.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                                            <div data-bg-image-src="images/rooms-list-image-20.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-entity-slide"></div>
                                                                            <div data-bg-image-src="images/rooms-list-image-16.jpg" class="milenia-entity-slide"></div>
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
                                                                                    <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget. </p>
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
                                                    <!--================ Thumbnails ================-->
                                                    <div class="milenia-tabbed-carousel-thumbs">
                                                        <div data-tabbed-sync="milenia-grid-tabbed-5" class="milenia-grid milenia-grid--cols-4 owl-carousel--nav-onhover owl-carousel owl-carousel--nav-edges owl-carousel--nav-small">
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-21.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Grand Deluxe Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-15.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Classic Balcony Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-18.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Superior Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-19.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Superior Balcony Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                            <div class="milenia-grid-item">
                                                                <figure class="milenia-tabbed-carousel-thumb">
                                                                    <div data-bg-image-src="images/rooms-list-image-20.jpg" class="milenia-tabbed-carousel-thumb-image"></div>
                                                                    <figcaption class="milenia-tabbed-carousel-thumb-caption milenia-text-color--darkest">Delux Double Room</figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--================ End of Thumbnails ================-->
                                                </div>
                                            </div>
                                            <!--================ End of Tab ================-->
                                        </div>
                                        <!--================ End of Tabs Container ================-->
                                    </div>
                                    <!--================ End of Tabs ================-->
                                </section>
                                <!--================ End of Content Section Rooms ================-->
                                
                                <!--================ Content Section Testimonials ================-->
                <section class="milenia-section">
                  <div class="milenia-colorizer--scheme-white">
                    <div class="row">
                      <div class="col-lg-8 offset-lg-2">
                        <!--================ Testimonials ================-->
                        <div class="milenia-testimonials milenia-testimonials--style-2">
                          <div class="milenia-grid owl-carousel">
                              <div class="milenia-grid-item">
                                <!--================ Testimonial ================-->
                                <div class="milenia-testimonial">
                                  <blockquote aria-labelledby="testimonial-cite-11" class="milenia-blockquote--unstyled milenia-text-color--darkest">“Food - check. Accommodation - check. Scenery - check. Pool - check. Yes I think this could be the most perfect place to be in the world!”</blockquote>
                                  <footer class="milenia-author">
                                    <div data-bg-image-src="images/author-image-6.png" class="milenia-author-photo"></div>
                                    <div class="milenia-author-info">
                                      <cite id="testimonial-cite-11">ADAM SMITH, FL, USA</cite>
                                    </div>
                                  </footer>
                                </div>
                                <!--================ End of Testimonial ================-->
                              </div>
                            <div class="milenia-grid-item">
                              <!--================ Testimonial ================-->
                              <div class="milenia-testimonial">
                                <blockquote aria-labelledby="testimonial-cite-10" class="milenia-blockquote--unstyled milenia-text-color--darkest">“Food - check. Accommodation - check. Scenery - check. Yes I think this could be the most perfect place to be in the world!”</blockquote>
                                <footer class="milenia-author">
                                  <div data-bg-image-src="images/author-image-1.png" class="milenia-author-photo"></div>
                                  <div class="milenia-author-info">
                                    <cite id="testimonial-cite-10">Rebecca Johnson, Ca, USA</cite>
                                  </div>
                                </footer>
                              </div>
                              <!--================ End of Testimonial ================-->
                            </div>
                            <div class="milenia-grid-item">
                              <!--================ Testimonial ================-->
                              <div class="milenia-testimonial">
                                <blockquote aria-labelledby="testimonial-cite-12" class="milenia-blockquote--unstyled milenia-text-color--darkest">“Food - check. Accommodation - check. Scenery - check. Pool - check. Yes I think this could be the most perfect place to be in the world!”</blockquote>
                                <footer class="milenia-author">
                                  <div data-bg-image-src="images/author-image-7.png" class="milenia-author-photo"></div>
                                  <div class="milenia-author-info">
                                    <cite id="testimonial-cite-12">AMANDA JACKSON, NY, USA</cite>
                                  </div>
                                </footer>
                              </div>
                              <!--================ End of Testimonial ================-->
                            </div>
                          </div>
                        </div>
                        <!--================ End of Testimonials ================-->
                      </div>
                    </div>
                  </div>
                </section>
                <!--================ End of Content Section Testimonials ================-->
                                <!--================ End of Content Section ================-->

                                <!--================ Content Section ================-->
                                <div class="milenia-section milenia-section--no-py milenia-section--stretched-content-no-px">
                                    <!--================ Gallery ================-->
                                    <div class="milenia-instafeed">
                                        <div id="instafeed" data-get="user" data-user="customer" data-limit="6" class="milenia-grid milenia-grid--no-gutters milenia-grid--cols-6"></div>
                                    </div>
                                    <!--================ End of Gallery ================-->
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
        <script src="vendors/monkeysan.tabs.min.js"></script>
        <script src="vendors/monkeysan.sameheight.min.js"></script>
        <script src="vendors/monkeysan.jquery.nav.1.0.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/arcticmodal/jquery.arcticmodal-0.3.min.js"></script>
        <script src="vendors/fancybox/jquery.fancybox.min.js"></script>
        <script src="vendors/monkeysan.validator.min.js"></script>
        <script src="vendors/handlebars-v4.0.5.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="js/modules/milenia.newsletter-form.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.min.js"></script>
        <script src="vendors/momentjs/moment.min.js"></script>
        <script src="vendors/retina.min.js"></script>
        <script src="js/modules/milenia.sidebar-hidden.min.js"></script>
        <script src="js/modules/milenia.alert-box.min.js"></script>
        <script src="js/modules/milenia.tabbed-grid.min.js"></script>
        <script src="js/modules/milenia.sticky-header-section.min.js"></script>
        <script src="js/milenia.app.js"></script>
    </body>
</html>