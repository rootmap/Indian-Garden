@extends('site.layout.master')
@section('title','Home')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="slider-one">
          <div style="height: auto; background-image: url({{URL::asset('upload/slider/'.$slider[0]->background_image) }}); background-size: cover;background-repeat: no-repeat;">
            <div class="hero">
              <div class="hero-block">
                <figure class="hero-logo">
                  <img class="img-responsive" src="{{URL::asset('upload/slider/'.$slider[0]->slider_image) }}" alt="{{$slider[0]->slider_title}}">
                </figure>
                <div class="cd-intro">
                  <h4 class="cd-headline clip">
                    <span>{{$slider[0]->slider_title}}</span>
                  </h4>
                </div>
                <div class="button-block">
                  <ul class="nav hero-nav">
                    <li><a href="{{url('menu')}}">See Menu</a></li>
                    <li><a href="#">Order Online</a></li>
                    <li><a href="{{url('reservation')}}">Reservations</a></li>
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
          <h2>{{ $HomePageVideo[0]->heading }}</h2>
          <p>{{ $HomePageVideo[0]->sub_heading }}</p>
        </div>
        <div style="padding:56.25% 0 0 0;position:relative; top: 15px;">
          <iframe src="{{ $HomePageVideo[0]->vimeo_video_url }}"
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
               <h1>{{ $we_are_open[0]->heading }}</h1>
               <p class="slogan">{{ $we_are_open[0]->sub_heading }} </p>
               <div class="col-lg-4">
                <div class="contact-icon-box">
                  <div class="icon-box">
                    <i class="fa {{ $we_are_open[0]->first_box_icon }} fa-2x"></i>
                  </div>
                  <h4>{{ $we_are_open[0]->first_box_heading }}</h4>
                  <p>{{ $we_are_open[0]->first_box_sub_heading }}</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-icon-box">
                  <div class="icon-box">
                    <i class="fa {{ $we_are_open[0]->second_box_icon }} fa-2x"></i>
                  </div>
                  <h4>{{ $we_are_open[0]->second_box_heading }}</h4>
                  <p>{{ $we_are_open[0]->second_box_sub_heading }}</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="contact-icon-box">
                  <div class="icon-box">
                    <i class="fa {{ $we_are_open[0]->third_box_icon }} fa-2x"></i>
                  </div>
                  <h4>{{ $we_are_open[0]->third_box_heading }}</h4>
                  <p>{{ $we_are_open[0]->third_box_sub_heading }}</p>
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
            <h1>{{ $HomeOrderDelivery[0]->heading }}</h1>
            <!-- <strong class="slogan">Fresh and Healthy Food Availale  </strong> -->
            <hr>
           <div class="col-md-8 order col-md-offset-3">
            
            <ul class="list-inline text-center">
              <li>
                <i class="fa {{ $HomeOrderDelivery[0]->first_icon }}"></i>
                <p>{{ $HomeOrderDelivery[0]->first_icon_text }}</p>
              </li>
              <li>
                <i class="fa {{ $HomeOrderDelivery[0]->second_icon }}"></i>
                <p>{{ $HomeOrderDelivery[0]->second_icon_text }}</p>
              </li>
              <li>
                <i class="fa {{ $HomeOrderDelivery[0]->third_icon }}"></i>
                <p>{{ $HomeOrderDelivery[0]->third_icon_text }}</p>
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
          <h2>{{ $HomeDelivery[0]->heading }}</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <a href="{{ $HomeDelivery[0]->first_logo_link }}">
          <div class="delviery-icon">
            <figure>
              <img src="{{URL::asset('upload/homedelivery/'.$HomeDelivery[0]->first_logo) }}" alt="Foodora">
            </figure>
            <div class="icon-hover">
              <i class="fa fa-share fa-4x"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="{{ $HomeDelivery[0]->second_logo_link }}">
          <div class="delviery-icon">
            <figure>
              <img src="{{URL::asset('upload/homedelivery/'.$HomeDelivery[0]->second_logo) }}" alt="Uber Eats">
            </figure>
            <div class="icon-hover">
              <i class="fa fa-share fa-4x"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="{{ $HomeDelivery[0]->third_logo_link }}">
          <div class="delviery-icon">
            <figure>
              <img src="{{URL::asset('upload/homedelivery/'.$HomeDelivery[0]->third_logo) }}" alt="Wolt">
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