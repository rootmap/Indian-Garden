@extends('site.layout.master')
@section('title','Menu')
@section('content')
<!--===| Menu Page Top Banner Start |menu-banner===-->
  <section class="banner-wrapper" style="background-image: url({{ url('site/img/custom/menu/s9ht-hero.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 menu">
          <h1>menu</h1>
          <p>fresh and healthy food available</p>
        </div>
      </div>
    </div>
  </section>
<!--===| Menu Page Top Banner End |===-->

<!--===| Menu Page First Block Start |===-->
<section class="menus">
  <div class="container">
    <div class="row mb-40">
      <div class="col-xs-12">
        <div class="top-icon text-center">
          <!-- <img src="{{url('site/img/custom/menu/pesto_goat_cheese_sun_dried_tomato_polenta.jpg')}}" alt="Appetizer"> -->
        <h1>Appetizer</h1>
        <p>This is a section of your menu. Give your item a brief description</p>
        </div>
      </div>
      <div class="clearfix"></div><br><br>
      <div class="col-md-3">
        <div class="menus-block">
          <figure class="starred">
            <img src="{{url('site/img/custom/menu/menus1.jpg')}}" alt="Menus 1">
          </figure>
          <div class="inner-text">
            <h4>MEXICAN GRILLED CORN</h4>
            <p class="sub-title">This is an item on your menu. Give your item a brief description</p>
              <p class="ingradients1">Price : 9 kr </p>
          </div>
        </div>
      </div>
        <div class="col-md-3">
          <div class="menus-block">
            <figure class="starreds">
              <img src="{{url('site/img/custom/menu/menus2.jpg')}}" alt="Menus 2">
            </figure>
            <div class="inner-text">
              <h4>CHICKEN FAJITAS SALAD</h4>
              <p class="sub-title">This is an item on your menu. Give your item a brief description</p>
              <p class="ingradients1">Price : 9 kr <img src="{{url('site/img/chili.png')}}" alt=""></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="menus-block">
            <figure class="starreds">
              <img src="{{url('site/img/custom/menu/menus3.jpg')}}" alt="Menus 2">
            </figure>
            <div class="inner-text">
              <h4>CHICKEN FAJITAS SALAD</h4>
              <p class="sub-title">This is an item on your menu. Give your item a brief description</p>
              <p class="ingradients1">Price : 9 kr <img src="{{url('site/img/chili.png')}}" alt=""></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="menus-block">
            <figure class="starreds">
              <img src="{{url('site/img/custom/menu/menus4.jpg')}}" alt="Menus 2">
            </figure>
            <div class="inner-text">
              <h4>CHICKEN FAJITAS SALAD</h4>
              <p class="sub-title">This is an item on your menu. Give your item a brief description</p>
              <p class="ingradients1">Price : 9 kr <img src="{{url('site/img/chili.png')}}" alt=""></p>
            </div>
          </div>
        </div>
    </div>
    <div class="row mb-40">
      <div class="col-xs-12">
        <div class="top-icon text-center">
          <!-- <img src="{{url('site/img/custom/menu/pesto_goat_cheese_sun_dried_tomato_polenta.jpg')}}" alt="Appetizer"> -->
        <h1>Appetizer</h1>
        <p>This is a section of your menu. Give your item a brief description</p>
        </div>
      </div>
      <div class="clearfix"></div><br><br>
      <div class="col-md-3">
        <div class="menus-block">
          <figure class="starred">
            <img src="{{url('site/img/custom/menu/menus1.jpg')}}" alt="Menus 1">
          </figure>
          <div class="inner-text">
            <h4>MEXICAN GRILLED CORN</h4>
            <p class="sub-title">This is an item on your menu. Give your item a brief description</p>
            <p class="ingradients1">Price : 9 kr</p>
          </div>
        </div>
      </div>
        <div class="col-md-3">
          <div class="menus-block">
            <figure class="starreds">
              <img src="{{url('site/img/custom/menu/menus2.jpg')}}" alt="Menus 2">
            </figure>
            <div class="inner-text">
              <h4>CHICKEN FAJITAS SALAD</h4>
              <p class="sub-title">This is an item on your menu. Give your item a brief description</p>
              <p class="ingradients1">Price : 9 kr <img src="{{url('site/img/chili.png')}}" alt=""></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="menus-block">
            <figure class="starreds">
              <img src="{{url('site/img/custom/menu/menus3.jpg')}}" alt="Menus 2">
            </figure>
            <div class="inner-text">
              <h4>CHICKEN FAJITAS SALAD</h4>
              <p class="sub-title">This is an item on your menu. Give your item a brief description</p>
              <p class="ingradients1">Price : 9 kr <img src="{{url('site/img/chili.png')}}" alt=""></p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="menus-block">
            <figure class="starreds">
              <img src="{{url('site/img/custom/menu/menus4.jpg')}}" alt="Menus 2">
            </figure>
            <div class="inner-text">
              <h4>CHICKEN FAJITAS SALAD</h4>
              <p class="sub-title">This is an item on your menu. Give your item a brief description</p>
              <p class="ingradients1">Price : 9 kr <img src="{{url('site/img/chili.png')}}" alt=""></p>
            </div>
          </div>
        </div>
    </div>
  </div>
</section>
<!--===| Menu Page First Block End |===-->
@endsection