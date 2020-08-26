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
 <section class="container-fluid d-flex justify-content-center mb-0 pb-0">
    <div class="container ">
        <div class="row">
            <div class="container text-center fm">
                <h6 class="hm mb-3">CONTACT US</h6>
                <h2 >Get In Touch</h2>
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
                <input type="submit" class="bd text-white form-control btn btn-block  " id="email12" placeholder="Email">
            </div>
            
            
        </form>
        </div>
        
        </div>
        
    
    </div>
 </section>   





    <!-- start section -->
    <section class="section card  m-0 " data-aos="zoom-in">
          <div class="container con ">
                <div class="row text-center ">
                    <div class="col-md-4 col-sm-12 ">
                        <i class="fa fa-map"></i>
                        <p>4127/ 5B-C Utako Road,  Abuja, F.C.T</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <i class="fa fa-envelope"></i>
                        <p>office@crypto.com</p>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <i class="fa fa-phone"></i>
                        <p>Main: 203-808-8613 <br> Office: 203-808-8648</p>
                    </div>
                    
                </div>
          </div>
    </section>
    <!-- end section -->

    <!-- TradingView Widget BEGIN -->
    <div style="width: 100%; height:auto; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; block-size:62px; font-size: 12px; box-sizing:content-box; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #141B1A;padding:1px;padding: 0px; margin: 0px;">
        <div style="height:40px;">
            <iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=light&pref_coin_id=1505&invert_hover=" width="100%" height="36" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;" width="100%" height="36" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
        </div>
    </div>
<!-- TradingView Widget END -->
<style>
 .hm{
        position: relative;
        text-transform: uppercase;
        color: #7ab9ff;
        letter-spacing: 0.2em;
        z-index: 2;
        font-family: Poppins, Arial, sans-serif;
        line-height: 1.33;    
        font-weight: 200;
        font-size: 1.7em ;
    }
  
  h2{
        position: relative;
        text-transform: uppercase;
        color: #28384c;
        letter-spacing: 0.2em;
        z-index: 2;
        font-family: Poppins, Arial, sans-serif;
        line-height: 1.33;    
        font-weight: 200;
        font-size: 2.7em ;
  }


    body{
        font-family: Poppins, Arial, sans-serif;
    }
    .bd{
        background-color:#1A3EB1 ;
        
    }
    .con{
        font-size: 30px;
        color:black;
    }
   
</style>
@endsection