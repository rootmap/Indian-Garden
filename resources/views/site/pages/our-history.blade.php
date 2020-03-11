@extends('site.layout.master')
@section('title','Our Story')
@section('content')
<section class="our-story cl-block">
  <div class="container  header-block">
    <div class="row justify-content-center">
      <div class="common_layout_title">
        <h2>{{$history[0]->page_heading}}</h2>
      </div>
    </div>
  </div>
  <!-- Common Layout Hero -->
  <div class="cl-hero" data-parallax="scroll" style="background-image: url({{URL::asset('upload/ourhistorypageinfo/'.$history[0]->background_image) }});">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-6 block-ded-padd">
          <div class="hero-inner-block">
            <h2><?= html_entity_decode($history[0]->content_heading)?></h2>
            <p>
              {{$history[0]->content_description}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /Common Layout Hero -->

  <!-- Common Layout Body -->
  <div class="cl-body">
    <div class="container">
      @if(!empty($OurHistory))
      <?php 
      $count = 0; 
      
      ?>
      @foreach($OurHistory as $his)
      <?php
      $oe_style = ++$count % 2 ? "odd" : "even"; 

      if($oe_style=='odd'){
      ?>
      <div class="row parent newhisAr">
        <div class="col-lg-5 col-lg-offset-1 visible-sm visible-xs hidden-md hidden-lg nopadd">
          <figure class="dtrFig" style="height: 100%;">
            <img src="{{URL::asset('upload/ourhistory/'.$his->content_image) }}" style="height: 100%;" alt="{{ $his->heading }}" class="img-fit">
          </figure>
        </div>
        <div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 nopadd">
          <div class="body-inner-block" style="height: 100%;  display: block;">
            <h2>{{ $his->heading }}<br>{{ $his->sub_heading }}</h2>
            <p class="mb-40">
              {{ $his->content_detail }}
            </p>
          </div>
        </div>
        <div class="col-lg-5 hidden-sm hidden-xs nopadd">
          <figure class="dtrFig" style="height: 100%;">
            <img src="{{URL::asset('upload/ourhistory/'.$his->content_image) }}" style="height: 100%;" alt="{{ $his->heading }}" class="img-fit">
          </figure>
        </div>
      </div>
      <?php 
      }
      else
      {
      ?>
          <div class="row parent newhisAr">
            <div class="col-lg-5 col-md-offset-1 nopadd">
              <figure class="dtrFig" style="height: 100%;">
                <img src="{{URL::asset('upload/ourhistory/'.$his->content_image) }}" style="height: 100%;" alt="{{ $his->heading }}" class="img-fit">
              </figure>
            </div>
            <div class="col-lg-5 nopadd">
              <div class="body-inner-block" style="height: 100%;  display: block;">
                <h2>{{ $his->heading }}<br>{{ $his->sub_heading }}</h2>
            <p class="mb-40">
              {{ $his->content_detail }}
            </p>
              </div>
            </div>
            
          </div>
      <?php
        }
      ?>
      @endforeach
      @endif
      
    </div>
  </div>
  <!-- /Common Layout Body -->
</section>
@endsection

@section('css')
<style type="text/css">
  .parent {
    display: flex;
}

</style>
@endsection

@section('js')
<script type="text/javascript">

  var isMobile = {
              Android: function() {
                  return navigator.userAgent.match(/Android/i);
              },
              BlackBerry: function() {
                  return navigator.userAgent.match(/BlackBerry/i);
              },
              iOS: function() {
                  return navigator.userAgent.match(/iPhone|iPad|iPod/i);
              },
              Opera: function() {
                  return navigator.userAgent.match(/Opera Mini/i);
              },
              Windows: function() {
                  return navigator.userAgent.match(/IEMobile/i) || navigator.userAgent.match(/WPDesktop/i);
              },
              any: function() {
                  return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
              }
          };

          if( isMobile.any() )
          { 
            $('.newhisAr').removeClass('parent');
          }
          else
          {
            $('.newhisAr').addClass('parent');

            $('.newhisAr').each(function(){
                //$(this).find('.body-inner-block').css('height',$(this).find('.dtrFig').children('img').height());
            });
          }

        
</script>
@endsection