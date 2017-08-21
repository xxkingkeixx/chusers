
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mazel - Multiprapose Html template</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="nileforest">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

   

  <!-- CSS -->
    <link href="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/css/style.css" rel="stylesheet" type="text/css" />
    <link href="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/css/ionicons.css" rel="stylesheet" type="text/css" />
    <link href="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/css/plugin/sidebar-menu.css" rel="stylesheet" type="text/css" />
    <link href="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/css/plugin/animate.css" rel="stylesheet" type="text/css" />
    <link href="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/css/jquery-ui.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <!-- Preloader -->
    <section id="preloader">
        <div class="loader" id="loader">
            <div class="loader-img"></div>
        </div>
    </section>
    <!-- End Preloader -->

    <!-- Search Overlay Menu -->
    <div class="search-overlay-menu">
        <span class="search-overlay-close"><i class="ion ion-ios-close-empty"></i></span>
        <form role="search" id="searchform" action="/search" method="get">
            <input value="" name="q" type="search" placeholder="Search..." />
            <button type="submit"><i class="ion ion-ios-search"></i></button>
        </form>
    </div>
    <!-- End Search Overlay Menu -->

    <!-- Sidemenu -->
    <section id="pushmenu-right" class="pushmenu pushmenu-right side-menu">
        <a id="menu-sidebar-close-icon" class="menu-close"><i class="ion ion-android-close"></i></a>
        <h5 class="white">Sign In</h5>
        <div class="sign-in">
            <input class="input-sm form-full" type="email" aria-required="true" id="email" name="email" placeholder="Email" value="" />
            <input class="input-sm form-full" type="password" aria-required="true" id="password" name="password" placeholder="Password" value="" />
            <input type="submit" class="btn btn-md btn-color-b form-full" value="Sign In" />
            <a>New Customer?</a>
        </div>
        <ul>
            <li><a class="all-demos-link" target="_blank" href="../demo.html">Main Demo Page</a></li>
            <li><a href="home.html">Home Default</a></li>
            <li><a href="portfolio-grid-2col.html">Portfolio</a></li>
            <li><a href="login-register.html">Login & Signup</a></li>
            <li><a href="faq-1.html">FAQ</a></li>
            <li><a href="about-1.html">About</a></li>
            <li><a href="service-1.html">Service</a></li>
            <li><a href="blog-grid-3col.html">Blog</a></li>
            <li><a href="404-error-1.html">404 Error</a></li>
            <li><a href="shop-checkout.html">Shopping Cart</a></li>
            <li><a href="contact-1.html">Contact Us</a></li>
        </ul>
    </section>
    <!--End Sidemenu -->

    <!-- Site Wraper -->
    <div class="wrapper">
        <!-- CONTENT --------------------------------------------------------------------------------->
        <!-- About Section -->
        <section id="about" class="pt pt-sm-80">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <div class="col-md-8 offset-md-2"></div>
                        <h2>
                            <span class="color">We are Mazel.</span> A Digitel<br />
                            Agency from the city of Berlin
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- Work Section -->
        <section class="ptb ptb-sm-80">
            <div class="container">
                <!-- work Filter -->
                <div class="row">
                    <ul class="col container-filter categories-filter">
                        <li><a class="categories active" data-filter="*">All</a></li>
                        <li><a class="categories" data-filter=".premium">premium</a></li>
                        <li><a class="categories" data-filter=".regular">regular</a></li>
                        <li><a class="categories" data-filter=".lowest">lowest</a></li>
                        <li><a class="categories" data-filter=".latest">latest</a></li>
                    </ul>
                </div>
                <!-- End work Filter -->
                <div class="row container-grid nf-col-3">

                    <div class="nf-item premium spacing">
                        <div class="item-box">
                            <a href="portfolio-single1.html">
                                <img alt="1" src="images/exploreimages/portfolio/1.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Consequat massa quis</h5>
                                        <p class="white">premium</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item lowest spacing">
                        <div class="item-box">
                            <a href="portfolio-single2.html">
                                <img alt="1" src="images/exploreimages/portfolio/2.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Bookmarksgrove right at</h5>
                                        <p class="white">lowest</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item premium spacing">
                        <div class="item-box">
                            <a href="portfolio-single3.html">
                                <img alt="1" src="images/exploreimages/portfolio/3.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">A small river named</h5>
                                        <p class="white">premium</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="nf-item regular spacing">
                        <div class="item-box">
                            <a href="portfolio-single4.html">
                                <img alt="1" src="images/exploreimages/portfolio/4.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Rethoric question ran over</h5>
                                        <p class="white">regular</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item premium spacing">
                        <div class="item-box">
                            <a href="portfolio-single1.html">
                                <img alt="1" src="images/exploreimages/portfolio/5.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Because there were</h5>
                                        <p class="white">premium</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item lowest spacing">
                        <div class="item-box">
                            <a href="portfolio-single5-slider.html">
                                <img alt="1" src="images/exploreimages/portfolio/6.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Ran over her cheek</h5>
                                        <p class="white">lowest</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item regular spacing">
                        <div class="item-box">
                            <a href="portfolio-single6-video.html">
                                <img alt="1" src="images/exploreimages/portfolio/7.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Oxmox advised her</h5>
                                        <p class="white">regular</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item latest spacing">
                        <div class="item-box">
                            <a href="portfolio-single7-youtube.html">
                                <img alt="1" src="images/exploreimages/portfolio/8.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Subline of her own road</h5>
                                        <p class="white">latest</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item regular spacing">
                        <div class="item-box">
                            <a href="portfolio-single8-vimeo.html">
                                <img alt="1" src="images/exploreimages/portfolio/9.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">But the Little Blind</h5>
                                        <p class="white">regular</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item regular spacing">
                        <div class="item-box">
                            <a href="portfolio-single1.html">
                                <img alt="1" src="images/exploreimages/portfolio/10.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Even the all-powerful</h5>
                                        <p class="white">regular</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item lowest spacing">
                        <div class="item-box">
                            <a href="portfolio-single2.html">
                                <img alt="1" src="images/exploreimages/portfolio/11.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">Italic Mountains</h5>
                                        <p class="white">lowest</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="nf-item lowest spacing">
                        <div class="item-box">
                            <a href="portfolio-single4.html">
                                <img alt="1" src="images/exploreimages/portfolio/12.jpg" class="item-container">
                                <div class="item-mask">
                                    <div class="item-caption">
                                        <h5 class="white">control about the blind</h5>
                                        <p class="white">lowest</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- End Work Section -->

        <div class="spacer-60"></div>
        <!-- END CONTENT ---------------------------------------------------------------------------->

    </div>
    <!-- Site Wraper End -->

 <!-- JS -->
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/jquery.easing.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/jquery.flexslider.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/jquery.fitvids.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/jquery.viewportchecker.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/jquery.stellar.min.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/wow.min.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/jquery.colorbox-min.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/owl.carousel.min.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/isotope.pkgd.min.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/imagesloaded.pkgd.min.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/sidebar-menu.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/jquery.fs.tipper.min.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/plugin/mediaelement-and-player.min.js"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/theme.js" type="text/javascript"></script>
    <script src="http://theme.nileforest.com/html/mazel-v1.5/01_mazel_multiprapose/js/navigation.js" type="text/javascript"></script>


</body>
</html>
