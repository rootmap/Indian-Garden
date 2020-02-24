@extends('site.layout.master')
@section('title','Home')
@section('content')

<div class="container-fluid" id="slider-container-area" style="clear: both; display: block; height:842px; overflow: hidden;">
    <div class="row rellax" style="background:url({{URL::asset('upload/slider/'.$slider[0]->background_image) }});" data-rellax-speed="-4">
        <div class="slider-one  control-overlay">
          <div>
            <div class="hero" style="margin: 0px !important;">
              <div class="hero-block">
                <figure class="hero-logo">
                  <img class="img-responsive"  data-rellax-speed="-2" src="{{URL::asset('upload/slider/'.$slider[0]->slider_image) }}" alt="{{$slider[0]->slider_title}}">


                </figure>

                <!-- <br> -->

<!--                 <div class="cd-intro" style="display: none;">
                  <h4 class="cd-headline clip" style="height:60px; display: block;clear: both;">
                    <span class="font-5-slider typewriter" data-id="{{$slider[0]->slider_title}}" id="typewriter" style="position: absolute; left: 0px; right: 0px;"></span>
                  </h4>
                </div> -->
       
                <div class="col-md-12 rellax"  data-rellax-speed="1" style="clear: both; margin-top: 60px; display: block;">
                  <div class="row">
                    <div class="col-md-4 col-xs-12 col-sm-12 mb-1">
                        <a  href="{{url('menu')}}" class="hero-block-hero-nav-li-a">See Menu</a>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-12 mb-1">
                        <a href="{{url('gallery')}}" class="hero-block-hero-nav-li-a">Gallery</a>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-12 mb-1">
                        <a href="{{url('reservation')}}" class="hero-block-hero-nav-li-a">Reservations</a>
                    </div>
                  </div>
                </div>
                <!-- <div class="button-block">
                  <ul class="nav hero-nav">
                    <li class="mb-seven"><a>See Menu</a></li>
                    <li class="mb-seven"><a href="#">Order Online</a></li>
                    <li class="mb-seven"><a >Reservations</a></li>
                  </ul>
                </div> -->
                <a href="#videos" id="loadvideos" data-rellax-speed="1" class="down rellax"><i class="fa fa-angle-down"></i></a>
              </div>
            </div>
            
          </div>
        </div>
     </div>
  </div>
<!--slider One -->

<!-- Video -->
<section class="home_video" id="videos" style="clear: both; display: block;">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="title">
          <h2>{{ $HomePageVideo[0]->heading }}</h2>
          <p>{{ $HomePageVideo[0]->sub_heading }}</p>
        </div>
        <div style="padding:56.25% 0 0 0;position:relative; top: 15px;">
          <div  id="playVidemomo" style=" background: url({{url('images/1.jpg')}}); position: absolute; z-index: 9999999; height:422px; background-size: cover; width: 750px; margin-top: -422px; cursor: pointer;"></div>
          <iframe id="ifvemo" src="{{ $HomePageVideo[0]->vimeo_video_url }}"
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
<section class="services rellax" data-rellax-speed="-2" data-rellax-wrapper="null"  data-rellax-center="true" style="background: url({{URL::asset('upload/weareopen/'.$we_are_open[0]->background_image)}}); padding-top:220px; padding-bottom: 150px;">
         <div class="row  rellax" data-rellax-speed="0" data-rellax-wrapper="null"  data-rellax-center="true" >
      <div class="container-fluid">
            <div class="col-xs-12 col-md-10 col-md-offset-1 text-center rellax" data-rellax-speed="1" data-rellax-wrapper="null"  data-rellax-center="true" >
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
</section>
<!--===| Service End ===|-->
<!--===| Food Menu Start ===|-->
@if($HomeOrderDelivery->module_status=='Active')
<section class="section-padding-50 food-menu-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-sm-12 commontop text-center">
            <h1>{{ $HomeOrderDelivery->heading }}</h1>
            <!-- <strong class="slogan">Fresh and Healthy Food Availale  </strong> -->
            <hr>
           <div class="col-md-8 order col-md-offset-3">
            
            <ul class="list-inline text-center">
              <li>
                <i class="fa {{ $HomeOrderDelivery[0]->first_icon }}"></i>
                <p>{{ $HomeOrderDelivery->first_icon_text }}</p>
              </li>
              <li>
                <i class="fa {{ $HomeOrderDelivery[0]->second_icon }}"></i>
                <p>{{ $HomeOrderDelivery->second_icon_text }}</p>
              </li>
              <li>
                <i class="fa {{ $HomeOrderDelivery[0]->third_icon }}"></i>
                <p>{{ $HomeOrderDelivery->third_icon_text }}</p>
              </li>
              
            </ul>
            <img src="{{ url('site/img/custom/lines.png') }}" alt="line" title="line" class="img-responsive">
          </div>
         </div>
      </div>
</section>
@endif

<section class="home_delivery"  style="background:#fff; width: 100%;" data-parallax="scroll" data-image-src="{{ url('site/img/custom/contact.jpg') }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title">
          <h2>{{ $HomeDelivery->heading }}</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <a href="{{ $HomeDelivery->first_logo_link }}">
          <div class="delviery-icon">
            <figure>
              <img src="{{URL::asset('upload/homedelivery/'.$HomeDelivery->first_logo) }}" alt="Foodora">
            </figure>
            <div class="icon-hover">
              <i class="fa fa-share fa-4x"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="{{ $HomeDelivery->second_logo_link }}">
          <div class="delviery-icon">
            <figure>
              <img src="{{URL::asset('upload/homedelivery/'.$HomeDelivery->second_logo) }}" alt="Uber Eats">
            </figure>
            <div class="icon-hover">
              <i class="fa fa-share fa-4x"></i>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-4">
        <a href="{{ $HomeDelivery->third_logo_link }}">
          <div class="delviery-icon">
            <figure>
              <img src="{{URL::asset('upload/homedelivery/'.$HomeDelivery->third_logo) }}" alt="Wolt">
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