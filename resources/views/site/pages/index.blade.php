@extends('site.layout.master')
@section('title','Home')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="slider-one">
          <div style="height: auto; background-image: url({{ url('site/img/custom/hero-bg.png') }}); background-size: cover;background-repeat: no-repeat;">
            <div class="hero">
              <div class="hero-block">
                <figure class="hero-logo">
                  <img class="img-responsive" src="{{ url('site/img/custom/ING_Logo-03.png') }}" alt="Hero">
                </figure>
                <div class="cd-intro">
                  <h4 class="cd-headline clip">
                    <span>INDIAN RESTAURANT</span>
                  </h4>
                </div>
                <div class="button-block">
                  <ul class="nav hero-nav">
                    <li><a href="#">See Menu</a></li>
                    <li><a href="#">Order Online</a></li>
                    <li><a href="#">Reservations</a></li>
                  </ul>
                </div>
                <a href="#videos" class="down"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
            
          </div>
        </div>
     </div>
  </div>
<!--slider One -->

<!-- Video -->
<section class="home_video" id="videos">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="title">
          <h2>Indian Garden</h2>
          <p>Mall of Scandinavia</p>
        </div>
        <div style="padding:56.25% 0 0 0;position:relative; top: 15px;">
          <iframe src="https://player.vimeo.com/video/61087683?title=0&byline=0&portrait=0"
            style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0"
            allow="autoplay; fullscreen" allowfullscreen>
          </iframe>
        </div>
        <script src="https://player.vimeo.com/api/player.js')}}"></script>
      </div>
    </div>
  </div>
</section>
<!-- /Video -->

<!--===| Service Start ===|-->
<section class="services" style="background: url({{ url('site/img/custom/contact.jpg') }}) no-repeat center center fixed;background-size: cover;">
   <div class="services-overlay">
      <div class="container-fluid">
         <div class="row">
            <div class="col-xs-12 col-md-10 col-md-offset-1 text-center ">
               <h1>We Are Open</h1>
               <p class="slogan">Mon-Son: 11.00 – 22.00 </p>
               <div class="col-lg-4">
                <div class="contact-icon-box">
                  <div class="icon-box">
                    <i class="fa fa-home fa-2x"></i>
                  </div>
                  <h4>Address</h4>
                  <p>Centrumvägen 28, 834 32 Brunflo</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-icon-box">
                  <div class="icon-box">
                    <i class="fa fa-phone fa-2x"></i>
                  </div>
                  <h4>Telephone</h4>
                  <p>123-456-7890</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-icon-box">
                  <div class="icon-box">
                    <i class="fa fa-info fa-2x"></i>
                  </div>
                  <h4>Info</h4>
                  <p>50 Restaurant, 3 Areas</p>
                </div>
              </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--===| Service End ===|-->
<!--===| Food Menu Start ===|-->
<section class="section-padding-50 food-menu-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 commontop text-center">
            <h1>Order delivery and take out</h1>
            <!-- <strong class="slogan">Fresh and Healthy Food Availale  </strong> -->
            <hr>
           <div class="col-md-8 order col-md-offset-3">
            
            <ul class="list-inline text-center">
              <li>
                <i class="fa fa-cutlery"></i>
                <p>Select Food</p>
              </li>
              <li>
                <i class="fa fa-truck"></i>
                <p>Order Food</p>
              </li>
              <li>
                <i class="fa fa-bus"></i>
                <p>Delivery or Take Out</p>
              </li>
              
            </ul>
            <img src="{{ url('site/img/custom/lines.png') }}" alt="line" title="line" class="img-responsive">
          </div>
         </div>
      </div>
</section>

<section class="home_delivery" style="background: url({{ url('site/img/custom/contact.jpg') }}) no-repeat center center fixed;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title">
          <h2>Home Delivery</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <a href="#">
          <div class="delviery-icon">
            <figure>
              <img src="{{ url('site/img/custom/foodora-180x180.png') }}" alt="Foodora">
            </figure>
            <div class="icon-hover">
              <i class="fa fa-share fa-4x"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="#">
          <div class="delviery-icon">
            <figure>
              <img src="{{ url('site/img/custom/uber_eats-180x180.png') }}" alt="Uber Eats">
            </figure>
            <div class="icon-hover">
              <i class="fa fa-share fa-4x"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="#">
          <div class="delviery-icon">
            <figure>
              <img src="{{ url('site/img/custom/wolt-180x180.png') }}" alt="Wolt">
            </figure>
            <div class="icon-hover">
              <i class="fa fa-share fa-4x"></i>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>
@endsection