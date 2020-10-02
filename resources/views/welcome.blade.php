@extends('layouts/app') @section('title', 'Home - ') 

@section('content')

<!-- Hero Section  
====================================== -->
<section id="slider" class="slider slide-overlay-black no-bullets">
    <!-- START REVOLUTION SLIDER 5.0 -->
    <div class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                <!-- slide 1 -->
                <li
                    data-transition="zoomout"
                    data-slotamount="default"
                    data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut"
                    data-masterspeed="2000"
                >
                    <!-- MAIN IMAGE -->
                    <img
                        src="assets/images/sliders/slide-bg/9.jpg"
                        alt="Slide Background Image"
                        width="1920"
                        height="1280"
                    />
                    <!-- LAYER NR. 1 -->
                    <div
                        class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['-80','-80','-80','-160']"
                        data-fontsize="['60', '50', '40', '30']"
                        data-lineheight="['60','60','60','60']"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-height="none"
                        data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                    >
                        <div class="slide--headline">
                            Start Investing <br />& Mining Cryptocurrency today!
                        </div>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div
                        class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['40','40','40','40']"
                        data-fontsize="['16','16','16','12']"
                        data-lineheight="['25','25','25','25']"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-height="none"
                        data-frames='[{"delay":1750,"speed":1000,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                    >
                        <div class="slide--bio">
                            We are a group of professional crypto ICO
                            consultants with technical expertise, <br />
                            are excellent at support and are led by an elite
                            team of managers.
                        </div>
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div
                        class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['125','125','165','300']"
                        data-width="none"
                        data-height="none"
                        data-frames='[{"delay":2000,"speed":1000,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                    >
                        <div class="slide-action">
                            <a
                                class="btn btn--primary btn--rounded mr-30"
                                href="/register"
                                >Join Us</a
                            >
                            <a
                                class="btn btn--white btn--bordered btn--rounded"
                                href="/login"
                                >Login</a
                            >
                        </div>
                    </div>
                </li>

                <!-- slide 2 -->
                <li
                    data-transition="boxslide"
                    data-slotamount="default"
                    data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut"
                    data-masterspeed="2000"
                >
                    <!-- MAIN IMAGE -->
                    <img
                        src="assets/images/sliders/slide-bg/10.jpg"
                        alt="Slide Background Image"
                        width="1920"
                        height="1280"
                    />
                    <!-- LAYER NR. 1 -->
                    <div
                        class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['-115','-95','-90','-40']"
                        data-fontsize="['16','16','16','12']"
                        data-lineheight="['25','25','25','25']"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-height="none"
                        data-frames='[{"delay":750,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                    >
                        <div class="slide--subheadline">
                            Instant, Secure & Private
                        </div>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div
                        class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['-13','-13','-13','10']"
                        data-fontsize="['60', '50', '40', '30']"
                        data-lineheight="['60','60','60','60']"
                        data-width="none"
                        data-height="none"
                        data-transform_idle="o:1;"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                    >
                        <div class="slide--headline">
                            Find & Compare The Best <br />Cryptocurrency
                            Exchange Rates
                        </div>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div
                        class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['90','90','80','80']"
                        data-fontsize="['16', '16', '16', '12']"
                        data-lineheight="['25','25','25','25']"
                        data-width="none"
                        data-height="none"
                        data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                    >
                        <div class="slide--bio">
                            Buy And Sell Cryptocurrency Near You!
                        </div>
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div
                        class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['160','160','160','180']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":150,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                    >
                        <div class="slide-action">
                            <a
                                class="btn btn--white btn--bordered btn--rounded"
                                href="#"
                                >Get Started</a
                            >
                        </div>
                    </div>
                </li>

                <!-- slide 3 -->
                <li
                    data-transition="scaledownfromleft"
                    data-slotamount="default"
                    data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut"
                    data-masterspeed="2000"
                >
                    <!-- MAIN IMAGE -->
                    <img
                        src="assets/images/sliders/slide-bg/3.jpg"
                        alt="Slide Background Image"
                        width="1920"
                        height="1280"
                    />
                    <!-- LAYER NR. 1 -->
                    <div
                        class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['-110','-100','-90','-40']"
                        data-fontsize="['16','16','16','12']"
                        data-lineheight="['25','25','25','25']"
                        data-whitespace="nowrap"
                        data-width="none"
                        data-height="none"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-splitout="none"
                        data-responsive_offset="on"
                    >
                        <div class="slide--subheadline">
                            Instant, Secure & Private
                        </div>
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div
                        class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['-13','-13','-13','10']"
                        data-fontsize="['60', '50', '40', '30']"
                        data-lineheight="['60','60','60','60']"
                        data-width="none"
                        data-height="none"
                        data-transform_idle="o:1;"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                    >
                        <div class="slide--headline">
                            Find & Compare The Best <br />Cryptocurrency
                            Exchange Rates
                        </div>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div
                        class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['90','90','80','80']"
                        data-fontsize="['16', '16', '16', '12']"
                        data-lineheight="['25','25','25','25']"
                        data-width="none"
                        data-height="none"
                        data-frames='[{"delay":1250,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                    >
                        <div class="slide--bio">
                            Buy And Sell Cryptocurrency Near You!
                        </div>
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div
                        class="tp-caption"
                        data-x="['left','left','left','left']"
                        data-hoffset="['15','15','30','30']"
                        data-y="['middle','middle','middle','middle']"
                        data-voffset="['160','160','160','180']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
                        data-splitin="none"
                        data-splitout="none"
                        data-responsive_offset="on"
                    >
                        <div class="slide-action">
                            <a
                                class="btn btn--white btn--bordered btn--rounded"
                                href="#"
                                >Get Started</a
                            >
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <!-- END OF SLIDER WRAPPER -->
</section>
<!-- #hero end -->
<!-- Clients #5
============================================= -->
<section id="clients5" class="clients clients-5">
    <div class="container">
        <div class="row">
            <div
                class="col-sm-12 col-md-12 col-lg-12 wow fadeIn"
                data-wow-delay="100ms"
            >
                <div
                    class="carousel owl-carousel"
                    data-slide="6"
                    data-slide-rs="2"
                    data-autoplay="false"
                    data-nav="false"
                    data-dots="false"
                    data-space="20"
                    data-loop="true"
                    data-speed="800"
                >
                    <!-- Client #1 -->
                    <div class="client">
                        <img
                            class="center-block"
                            src="assets/images/clients/7.png"
                            alt="client"
                        />
                    </div>
                    <!-- .client end -->

                    <!-- Client #2 -->
                    <div class="client">
                        <img
                            class="center-block"
                            src="assets/images/clients/8.png"
                            alt="client"
                        />
                    </div>
                    <!-- .client end -->

                    <!-- Client #3 -->
                    <div class="client">
                        <img
                            class="center-block"
                            src="assets/images/clients/9.png"
                            alt="client"
                        />
                    </div>
                    <!-- .client end -->

                    <!-- Client #4 -->
                    <div class="client">
                        <img
                            class="center-block"
                            src="assets/images/clients/10.png"
                            alt="client"
                        />
                    </div>
                    <!-- .client end -->

                    <!-- Client #5 -->
                    <div class="client">
                        <img
                            class="center-block"
                            src="assets/images/clients/11.png"
                            alt="client"
                        />
                    </div>
                    <!-- .client end -->

                    <!-- Client #6 -->
                    <div class="client">
                        <img
                            class="center-block"
                            src="assets/images/clients/12.png"
                            alt="client"
                        />
                    </div>
                    <!-- .client end -->
                </div>
            </div>
            <!-- .col-lg-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #clients5 end -->

<!-- about #5
============================================= -->
<section id="about5" class="about about-2 about-5 pb-0">
    <div class="container">
        <div class="row clearfix">
            <div
                class="col-sm-12 col-md-12 col-lg-6 wow fadeInLeft"
                data-wow-delay="100ms"
            >
                <div class="heading heading-1">
                    <p class="heading--subtitle">What We Offer?!!</p>
                    <h2 class="heading--title medium">
                        Useful Process, Happy Clients & Effective Marketing.
                    </h2>
                    <p class="heading--desc">
                        Each investor considering participating in an ICO will
                        conduct his or her due diligence, typically by reading
                        your whitepaper and blog posts.
                    </p>
                    <p class="heading--desc">
                        Providing this support to thousands of potential
                        investors is time consuming, but if they feel their
                        questions are not getting satisfactory answers.
                    </p>
                </div>
                <a
                    href="/about-us"
                    class="btn btn--primary btn--rounded mb-50-sm mb-50-xs"
                    >More About Us</a
                >
            </div>
            <!-- .col-lg-6 end -->
            <div
                class="col-sm-12 col-md-12 col-lg-6 wow fadeInRight"
                data-wow-delay="100ms"
            >
                <br /><br /><br />
                <div class="about--img">
                    <script src="https://widgets.coingecko.com/coingecko-coin-ticker-widget.js"></script>
                    <coingecko-coin-ticker-widget
                        coin-id="bitcoin"
                        currency="usd"
                        locale="en"
                        width=""
                    ></coingecko-coin-ticker-widget>
                </div>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #about5 end -->

<!-- Counter #1
============================================= -->
<section id="counter1" class="counter counter-1">
    <div class="container">
        <div class="row">
            <!-- count #1 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="count-box text-center">
                    <div class="counting">1,538</div>
                    <div class="count-title">Coffee Cups</div>
                </div>
            </div>
            <!-- .col-md-3 end -->

            <!-- count #2 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="count-box text-center">
                    <div class="counting">2,124</div>
                    <div class="count-title">Satisfied Clients</div>
                </div>
            </div>
            <!-- .col-md-3 end -->

            <!-- count #3 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="count-box text-center">
                    <div class="counting">3,128</div>
                    <div class="count-title">Finished Projects</div>
                </div>
            </div>
            <!-- .col-md-3 end -->

            <!-- count #4 -->
            <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                <div class="count-box text-center">
                    <div class="counting">9,534</div>
                    <div class="count-title">Working Hours</div>
                </div>
            </div>
            <!-- .col-md-3 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #counter1 end -->

<!-- featured #8
============================================= -->
<section
    id="featured8"
    class="featured-7 featured-8 text-center bg-overlay bg-overlay-dark9"
>
    <div class="bg-section">
        <img src="assets/images/background/17.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-10 offset-lg-1">
                <div class="row">
                    <div
                        class="col-sm-12 col-md-6 col-lg-3 wow fadeInUp"
                        data-wow-delay="100ms"
                    >
                        <div class="feature-card">
                            <div class="feature-card-icon">
                                <img
                                    src="assets/images/icons/BitcoinIcon6.png"
                                    alt="Bitcoin Icon"
                                />
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title text-white">
                                    Secure & Reliable Payments
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-lg-4 end -->
                    <div
                        class="col-sm-12 col-md-6 col-lg-3 wow fadeInUp"
                        data-wow-delay="200ms"
                    >
                        <div class="feature-card">
                            <div class="feature-card-icon">
                                <img
                                    src="assets/images/icons/BitcoinIcon7.png"
                                    alt="Bitcoin Icon"
                                />
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title text-white">
                                    No Need For More Passwords
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-lg-4 end -->
                    <div
                        class="col-sm-12 col-md-6 col-lg-3 wow fadeInUp"
                        data-wow-delay="300ms"
                    >
                        <div class="feature-card">
                            <div class="feature-card-icon">
                                <img
                                    src="assets/images/icons/BitcoinIcon8.png"
                                    alt="Bitcoin Icon"
                                />
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title text-white">
                                    Free Livetime Insurance
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->
                    <div
                        class="col-sm-12 col-md-6 col-lg-3 wow fadeInUp"
                        data-wow-delay="300ms"
                    >
                        <div class="feature-card">
                            <div class="feature-card-icon">
                                <img
                                    src="assets/images/icons/BitcoinIcon9.png"
                                    alt="Bitcoin Icon"
                                />
                            </div>
                            <div class="feature-card-content">
                                <h3 class="feature-card-title text-white">
                                    Full Enterprise Blockchain
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- .col-md-3 end -->
                </div>
                <!-- .row end -->
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div
                            class="heading heading-5 wow fadeIn"
                            data-wow-delay="100ms"
                        >
                            <h2 class="heading--title color-white">
                                Providing Support To Thousands <br />Of
                                Potential Investors All Over The World!!
                            </h2>
                            <p class="heading--desc">
                                Now you can start trading Bitcoin, Ethereum and
                                many cryptocurrencies fast, easily and safely
                                from where ever you are. With great margin
                                trading leverage and short sell options
                                available with quick deposit & withdrawal
                                capability. Cryptocurrencies have become
                                established investment commodities among major
                                financial institutions, and have even been
                                adopted by countries.
                            </p>
                        </div>
                        <a
                            href="/login"
                            class="btn btn--primary btn--rounded wow fadeInUp"
                            data-wow-delay="100ms"
                            >Get Started</a
                        >
                    </div>
                    <!-- .col-lg-12 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .col-lg-10 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container -->
</section>
<!-- #featured8 end -->

<!-- Case 3 Column
============================================= -->

<!-- #case end -->

<!-- Team #1
============================================= -->
<!-- Bitcoin Price Chart Widget
============================================= -->
<section id="BitcoinWidget" class="xchange-rate" style="padding-bottom: 1px">
    <div class="container">
        <div class="row clearfix">
            <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                <div class="heading heading-1 mb-50 text--center">
                    <p class="heading--subtitle">Realtime Charts</p>
                    <h2 class="heading--title">Bitcoin Ecosystem</h2>
                    <p class="heading--desc mb-0">We monitor the spectrum of available cryptocurrencies and alert our users to market moving events as and when it happens.</p>
                </div>
            </div>
            <!-- .col-lg-6 end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="mb-50">
                    <div class="btcwdgt-chart"></div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="mb-50">
                    <div class="btcwdgt-chart" bw-theme="light"></div>
                </div>
            </div>
        </div>

  
        <!-- .row end -->
    </div><br>
    <!-- .container end -->
    <div id="top-bar" class="top-bar bitcoin-tracker-dark">
        <div class="container-fluid pr-0 pl-0">
            <div class="row clearfix">
                <div class="topbarBitcoinTracker"></div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </div><!-- Hero Section < --> 
</section>
<!-- #BitcoinWidget end -->
<!-- #team1 end -->

<!-- Skills #1
============================================= -->

<!-- #skills1 end -->

<!-- Consultation #1
============================================= -->
<section
    id="consultation"
    class="consultation consultation-1 bg-overlay bg-overlay-dark8"
>
    <div class="bg-section">
        <img src="assets/images/background/18.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="consultation-form bg-white text-center no-shadow">
                    <div class="consultation--desc">
                        Request a Consultation
                    </div>
                    <form
                        method="post"
                        action="http://localhost/template/niche/cryptify/html/pro/preview/assets/php/contact.php"
                        class="contactForm mb-0"
                    >
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <input
                                    type="text"
                                    class="form-control"
                                    name="consultater-name"
                                    id="consultater-name"
                                    placeholder="Your Name"
                                    required=""
                                />
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <input
                                    type="email"
                                    class="form-control"
                                    name="consultater-email"
                                    id="consultater-email"
                                    placeholder="Email"
                                />
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-4">
                                <div class="form-select">
                                    <i class="fa fa-angle-down"></i>
                                    <select
                                        class="form-control"
                                        name="Cryptocurreny"
                                        id="Cryptocurreny"
                                    >
                                        <option value="Cryptocurrencies"
                                            >Cryptocurrencies</option
                                        >
                                        <option value="Bitcoin">Bitcoin</option>
                                        <option value="Litecoin"
                                            >Litecoin</option
                                        >
                                        <option value="Namecoin"
                                            >Namecoin</option
                                        >
                                        <option value="Dogecoin"
                                            >Dogecoin</option
                                        >
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <textarea
                                    class="form-control"
                                    name="consultater-message"
                                    id="message"
                                    rows="2"
                                    placeholder="Request Details:"
                                ></textarea>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <input
                                    type="submit"
                                    value="Submit Request"
                                    name="submit"
                                    class="btn btn--primary btn--block"
                                />
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="contact-result"></div>
                            </div>
                        </div>
                        <!-- .row end -->
                    </form>
                    <!-- form end -->
                </div>
                <!-- .contact-form end -->
            </div>
            <!-- .col-lg-8 end -->
        </div>
    </div>
    <!-- .container end -->
</section>
<!-- #consultation end -->
@endsection
