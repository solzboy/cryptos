<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    <head>
        <!-- Document Meta
    ============================================= -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!--IE Compatibility Meta-->
        <meta name="author" content="DanoiTech" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"
        />
        <meta
            name="description"
            content="Bitcoin And Crypto Currency Html5 Template"
        />
        <link href="assets/images/favicon/favicon.png" rel="icon" />

        <!-- Fonts
    ============================================= -->
        <link
            href="https://fonts.googleapis.com/css?family=Exo+2:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7CRoboto:300,300i,400,400i,500,500i,700,700i,900,900i%7CWork+Sans:300,400,500,600,700,800,900"
            rel="stylesheet"
            type="text/css"
        />

        <!-- Stylesheets
    ============================================= -->
        <link href="assets/css/external.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />

        <!-- RS5.0 Main Stylesheet -->
        <link
            rel="stylesheet"
            type="text/css"
            href="assets/revolution/css/settings.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="assets/revolution/css/layers.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="assets/revolution/css/navigation.css"
        />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->

        <!-- Document Title
    ============================================= -->
        <title>@yield('title'){{ config("app.name") }}</title>
    </head>
    <body>
        <div class="preloader">
            <div class="loader-eclipse">
                <div class="loader-content"></div>
            </div>
        </div>
        <!-- Document Wrapper
	============================================= -->
        <div id="wrapper" class="wrapper clearfix">
            <header
                id="navbar-spy"
                class="header header-transparent header-fixed"
            >
                <nav
                    id="primary-menu"
                    class="navbar navbar-expand-lg navbar-light navbar-bordered"
                >
                    <div class="container">
                        <a class="navbar-brand" href="/">
                            <img
                                class="logo logo-light"
                                src="assets/images/logo/logo-light.png"
                                alt="Blue Chips Network Logo"
                            />
                            <img
                                class="logo logo-dark"
                                src="assets/images/logo/logo-dark.png"
                                alt="Blue Chips Network Logo"
                            />
                        </a>
                        <button
                            class="navbar-toggler"
                            type="button"
                            data-toggle="collapse"
                            data-target="#navbarContent"
                            aria-controls="navbarContent"
                            aria-expanded="false"
                            aria-label="Toggle navigation"
                        >
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div
                            class="collapse navbar-collapse"
                            id="navbarContent"
                        >
                            <ul class="navbar-nav ml-auto">
                                <!-- Home Menu-->
                                <li class="active">
                                    <a href="/" class="menu-item">Home</a>
                                </li>
                                <!-- li end -->

                                <!-- Pages Menu -->
                                <li class="">
                                    <a href="/about-us" class="menu-item"
                                        >About us</a
                                    >
                                </li>
                                <!-- li end -->
                                <!-- Services Menu-->
                                <li class="has-dropdown">
                                    <a
                                        href="#"
                                        data-toggle="dropdown"
                                        class="dropdown-toggle menu-item"
                                        >Invest</a
                                    >
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="/why-invest">why invest</a>
                                        </li>
                                        <li>
                                            <a href="/invest-with-us"
                                                >invest with us</a
                                            >
                                        </li>
                                    </ul>
                                </li>
                                <!-- li end -->
                                <!-- Studies Menu-->
                                <li class="">
                                    <a href="/plans" class="menu-item">Plans</a>
                                </li>
                                <!-- li end -->
                                <li class="">
                                    <a href="/contact-us" class="menu-item"
                                        >Contact Us</a
                                    >
                                </li>
                                <!-- Features Menu-->
                            </ul>
                            <div class="module-container">
                                <!-- Module Consultation  -->
                                <div
                                    class="module module-consultation pull-left"
                                >
                                    <a
                                        href="page-consultation.html"
                                        class="btn btn--white btn--bordered btn--rounded"
                                        >Get Started</a
                                    >
                                </div>
                                <!-- Module Social -->
                                <div class="module module-social pull-left">
                                    <a href="#"
                                        ><i class="fa fa-facebook"></i
                                    ></a>
                                    <a href="#"
                                        ><i class="fa fa-twitter"></i
                                    ></a>
                                    <a href="#"
                                        ><i class="fa fa-linkedin"></i
                                    ></a>
                                </div>
                                <!-- .module-social end -->
                            </div>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </header>

            @yield('content')

            <!-- Footer #1
============================================= -->
            <footer id="footer" class="footer footer-1">
                <!-- Widget Section
	============================================= -->
                <div class="footer-widget">
                    <div class="container">
                        <div class="row clearfix">
                            <div
                                class="col-sm-12 col-md-4 col-lg-3 footer--widget widget-about"
                            >
                                <div class="widget-content">
                                    <img
                                        class="footer-logo"
                                        src="assets/images/logo/logo-light.png"
                                        alt="logo"
                                    />
                                    <p>
                                        Exchange Cryptocurrency at the Best Rate
                                        by getting the best offer from all the
                                        exchanges at one place.
                                    </p>
                                    <div class="footer-social-icon">
                                        <a class="facebook" href="#">
                                            <i class="fa fa-facebook"></i
                                            ><i class="fa fa-facebook"></i>
                                        </a>
                                        <a class="twitter" href="#">
                                            <i class="fa fa-twitter"></i
                                            ><i class="fa fa-twitter"></i>
                                        </a>
                                        <a class="instagram" href="#">
                                            <i class="fa fa-instagram"></i
                                            ><i class="fa fa-instagram"></i>
                                        </a>
                                        <a class="linkedin" href="#">
                                            <i class="fa fa-linkedin"></i
                                            ><i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div
                                class="col-sm-12 col-md-4 col-lg-2 footer--widget widget-links"
                            >
                                <div class="widget-title">
                                    <h5>Company</h5>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Meet Our Team</a></li>
                                        <li><a href="#">How It Works</a></li>
                                        <li><a href="#">Latest News</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- .col-md-2 end -->

                            <div
                                class="col-sm-12 col-md-4 col-lg-2 footer--widget widget-links"
                            >
                                <div class="widget-title">
                                    <h5>Help & Support</h5>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Exchange Rates</a></li>
                                        <li>
                                            <a href="#">Supported Currencies</a>
                                        </li>
                                        <li>
                                            <a href="#">Asset Introduction</a>
                                        </li>
                                        <li>
                                            <a href="#">Affiliate Program</a>
                                        </li>
                                        <li><a href="#">Developer Tools</a></li>
                                        <li><a href="#">Help & Wiki</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- .col-md-2 end -->

                            <div
                                class="col-sm-12 col-md-4 col-lg-2 footer--widget widget-links"
                            >
                                <div class="widget-title">
                                    <h5>How To</h5>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="#">Buy Bitcoin</a></li>
                                        <li>
                                            <a href="#">Buy Bitcoin Cash</a>
                                        </li>
                                        <li><a href="#">Buy Ethereum</a></li>
                                        <li><a href="#">Buy Litecoin</a></li>
                                        <li><a href="#">Status</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- .col-md-2 end -->

                            <div
                                class="col-sm-12 col-md-4 col-lg-3 footer--widget widget-newsletter"
                            >
                                <div class="widget-title">
                                    <h5>Stay Updated</h5>
                                </div>
                                <div class="widget-content">
                                    <form class="form-newsletter mailchimp">
                                        <input
                                            type="email"
                                            name="email"
                                            class="form-control"
                                            placeholder="Subscribe Our Newsletter"
                                        />
                                        <button type="submit">
                                            <i
                                                class="fa fa-long-arrow-right"
                                            ></i>
                                        </button>
                                    </form>
                                    <div class="subscribe-alert"></div>
                                    <div class="clearfix"></div>
                                    <p>Get the latest updates and offers.</p>
                                </div>
                            </div>
                            <!-- .col-md-3 end -->
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- .container end -->
                </div>
                <!-- .footer-widget end -->

                <!-- Copyrights
	============================================= -->
                <div class="footer--bar">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="footer--copyright">
                                    <span>© 2018, With Love by</span>
                                    <a
                                        href="https://themeforest.net/user/7oroof/portfolio?ref=zytheme"
                                        >7oroof.com</a
                                    >
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div
                                    class="payment--methods text-right text-center-xs"
                                >
                                    <a href="#" title="Visa"
                                        ><img
                                            src="assets/images/footer/visa.png"
                                            alt="Visa"
                                    /></a>
                                    <a href="#" title="Mastercard"
                                        ><img
                                            src="assets/images/footer/mastercard.png"
                                            alt="Mastercard"
                                    /></a>
                                    <a href="#" title="amex">
                                        <img
                                            src="assets/images/footer/amex.png"
                                            alt="amex"
                                    /></a>
                                    <a href="#" title="Delta"
                                        ><img
                                            src="assets/images/footer/delta.png"
                                            alt="Delta"
                                        />
                                    </a>
                                    <a href="#" title="Cirrus"
                                        ><img
                                            src="assets/images/footer/cirrus.png"
                                            alt="Cirrus"
                                    /></a>
                                    <a href="#" title="Paypal"
                                        ><img
                                            src="assets/images/footer/paypal.png"
                                            alt="Paypal"
                                    /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .container end -->
                </div>
                <!-- .footer-copyright end -->
            </footer>

            <div id="back-to-top" class="backtop">
                <i class="fa fa-long-arrow-up"></i>
            </div>
        </div>
        <!-- #wrapper end -->

        <!-- Footer Scripts
============================================= -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/functions.js"></script>
        <!-- RS5.0 Core JS Files -->
        <script src="assets/revolution/js/jquery.themepunch.tools.min838f.js?rev=5.0"></script>
        <script src="assets/revolution/js/jquery.themepunch.revolution.min838f.js?rev=5.0"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <!-- RS Configration JS Files -->
        <script src="assets/js/rsconfig.js"></script>
    </body>

    <!-- Mirrored from zytheme.com/demos/cryptify/home-ico-agency.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 22 Aug 2020 13:32:40 GMT -->
</html>
