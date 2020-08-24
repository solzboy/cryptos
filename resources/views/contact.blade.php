@extends('layouts/app') @section('title', 'About Us - ') 

@section('content')

<!-- Page Title #1
============================================= -->
<section id="page-title" class="page-title  bg-overlay bg-overlay-dark bg-green bg-parallax mb-0">
<div class="bg-section ">
        <img src="assets/images/page-titles/17.jpg" alt="Background" />
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="title title-6 text-center">
                    <div class="title--heading">
                        <h1>Contact Us</h1>
                    </div>
                    <p class="secondary">Your state-of-the-art mining hardware is already running! Start mining today</p>
                    <div class="clearfix"></div>
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li><a href="about-us">About</a></li>
                        <li class="active">Contact us</li>
                    </ol>
                </div><!-- .title end -->
            </div><!-- .col-lg-12 end -->
        </div><!-- .row end -->
    </div><!-- .container end -->
</section><!-- #page-title end -->
<!-- Page Title #1 end
============================================= -->
<!-- start main -->
<main role="main">
    <!-- FORM-->
 <section class="container-fluid d-flex justify-content-center">
    <div class="container">
        <div class="row">
            <div class="container text-center">
                <h6>CONTACT US</h6>
                <h2>Get In Touch</h2>
            </div>
            <div class="container">
                <p class="text-center text-secondary">Any questions? Reach out to us and we’ll get back to you shortly.</p>
            </div>
        </div>
        <form>
            <div class="form-row  d-flex justify-content-center">
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="firstName" placeholder="First Name">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group container col-md-8  p-0 d-flex justify-content-center">
                <input type="email" class="form-control " id="email12" placeholder="Email">
            </div>
            <div class="form-group container col-md-8  p-0 d-flex justify-content-center">
                <textarea type="email" class="form-control " id="text-area"  placeholder="Comment"></textarea>  
            </div>
            <div class="form-group container col-md-8  p-0 d-flex justify-content-center">
                <input type="submit" class="text-white form-control btn btn-block btn-dark bg-secondary " id="email12" placeholder="Email">
            </div>
            
            
        </form>
        </div>
        
        </div>
        
    
    </div>
 </section>   





    <!-- start section -->
    <section class="section m-0 p-0 section--no-pt section--no-pb aos-init aos-animate" data-aos="zoom-in">
            <iframe id="g_map--0001" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2610.4357066077228!2d-68.49688790663315!3d63.743364290786204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4dd316253416f12d%3A0xbd90938bfa19de02!2sQiyuttaat%2C+Iqaluit%2C+NU%2C+Canada!5e0!3m2!1sen!2sde!4v1549005982567" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            <style type="text/css">
                #g_map--0001 { height: 380px }

                @media only screen and (min-width: 560px)
                {
                    #g_map--0001 { height: 475px }
                }
            </style>
        </section>
    <!-- end section -->

    <!-- TradingView Widget BEGIN -->
    <div style="width: 100%; height:auto; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #141B1A;padding:1px;padding: 0px; margin: 0px;">
        <div style="height:40px;">
            <iframe src="./AxosCrypto cont_files/widget.html" width="100%" height="36" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
        </div>
    </div>
<!-- TradingView Widget END -->
@endsection