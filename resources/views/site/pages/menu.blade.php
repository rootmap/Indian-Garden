@extends('site.layout.master')
@section('title','Menu')
@section('js')
  <script type="text/javascript">
    
  </script>
@endsection
@section('content')
  
<!--===| Menu Page Top Banner Start |menu-banner===-->
  {{-- <section style="background-image: url({{URL::asset('upload/menupageinfo/'.$MenuPageInfo[0]->header_image) }});">
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
  </section> --}}
  <div class="container">
    <div class="row justify-content-center cl-block">
      <div class="common_layout_title">
        <h2>{{$MenuPageInfo[0]->heading}}</h2>
      </div>
    </div>
  </div>
<!--===| Menu Page Top Banner End |===-->

<!--===| Menu Page First Block Start |===-->
<section class="menus">
  <div class="container">
    <div class="gallery-trigger text-center">
      <ul id="filter">
         <li><a class="active catloadpro" href="javascript:void(0);" data-group="total" >all</a></li> 
         @if(count($category)>0)
            @foreach($category as $c)
              <li><a href="javascript:void(0);" class="catloadpro" data-group="{{str_replace(' ','_',strtolower($c->name))}}">{{$c->name}}</a></li> 
            @endforeach
         @endif
      </ul> 
    </div>
    @if(!empty($MenuItem))
    @foreach($MenuItem as $ca)
    <div class="row mb-40 total {{str_replace(' ','_',strtolower($ca['name']))}}">
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
              $img = "<img src='".URL::asset('images/chili-small.png')."'>";
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
              <p class="ingradients1">Price : {{$sca['price']}} kr <?= $img ?><?= $img ?><?= $img ?></p>
          </div>
        </div>
      </div>


      
      <?php  $i++; ?>
      @endforeach
        
    </div>
    @endforeach
    @endif
    
  </div>
</section>
<!--===| Menu Page First Block End |===-->
@endsection