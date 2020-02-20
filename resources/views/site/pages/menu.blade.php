@extends('site.layout.master')
@section('title','Menu')
@section('content')
  
<!--===| Menu Page Top Banner Start |menu-banner===-->
  <section style="background-image: url({{URL::asset('upload/menupageinfo/'.$MenuPageInfo[0]->header_image) }});">
    <div class="banner-wrapper control-overlay">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 menu">
            <h1>{{$MenuPageInfo[0]->heading}}</h1>
            <p>{{$MenuPageInfo[0]->sub_heading}}</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<!--===| Menu Page Top Banner End |===-->

<!--===| Menu Page First Block Start |===-->
<section class="menus">
  <div class="container">
    @if(!empty($MenuItem))
    @foreach($MenuItem as $ca)
    <div class="row mb-40">
      <div class="col-xs-12">
        
        <div class="top-icon text-center">
          <!-- <img src="{{url('site/img/custom/menu/pesto_goat_cheese_sun_dried_tomato_polenta.jpg')}}" alt="Appetizer"> -->
        <h1>{{$ca['name']}}</h1>
        <p>{{$ca['description']}}</p>
        </div>
        
      </div>
      <div class="clearfix"></div><br><br>
      <?php $i = 1; ?>
      @foreach($ca['scat'] as $sca)
     
      <div class="col-md-3 mb-1">
        <div class="menus-block">
          <?php
            if($sca['special']=='Yes'){
              $class = 'class="starred"';
              $img ='';
            }
            //site/img/chili.png
            elseif ($sca['spicy']=='Yes') {
              $class = 'class="starreds"';
              $img = "<img src='".URL::asset('site/img/chili.png')."'>";
              //echo $img;
            }
          ?>
          <figure <?= $class ?>>
            <img style="height:230px;" src="{{URL::asset('upload/menuitem/'.$sca['menu_item_image']) }}" alt="{{$sca['name']}}">
          </figure>
          <div class="inner-text">
            <h4>{{$sca['name']}}</h4>
            <p class="sub-title">{{$sca['description']}}</p>
              {{-- <p class="ingradients1">Price : {{$sca['price']}} kr </p> --}}
              <p class="ingradients1">Price : {{$sca['price']}} kr <?= $img ?></p>
          </div>
        </div>
      </div>


      
      <?php  $i++; ?>
      @endforeach
        {{-- <div class="col-md-3">
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
        </div> --}}
    </div>
    @endforeach
    @endif
    {{-- <div class="row mb-40">
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
    </div> --}}
  </div>
</section>
<!--===| Menu Page First Block End |===-->
@endsection