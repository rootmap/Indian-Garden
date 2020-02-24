@extends('site.layout.master')
@section('title','Events')
@section('content')
<section class="our-story cl-block">
  <div class="container">
    <div class="row justify-content-center">
      <div class="common_layout_title">
        <h2>{{ $EventPageInfo->page_heading }}</h2>
      </div>
    </div>
  </div>
  <!-- Common Layout Hero -->
  <div class="cl-hero" data-parallax="scroll" style="background-image: url({{URL::asset('upload/eventpageinfo/'.$EventPageInfo->content_background) }});">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-6 block-ded-padd">
          <div class="hero-inner-block">
            <h2>{{ $EventPageInfo->content_heading }}<br>{{ $EventPageInfo->content_sub_heading }}</h2>
            <p>
              {{ $EventPageInfo->content_description }}
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
      @if(!empty($EventInfo))
      <?php 
      $count = 0; 
      
      ?>
      @foreach($EventInfo as $evn)
      <?php
      $oe_style = ++$count % 2 ? "odd" : "even"; 

      if($oe_style=='odd'){
      ?>
        <div class="row">
          <div class="col-lg-5 col-md-offset-1 nopadd">
            <div class="body-inner-block">
              <h2>{{ $evn->heading }}<br>{{ $evn->sub_heading }}</h2>
            <p class="mb-40">
              {{ $evn->content }}
            </p>
              <a href="{{ url('upload/eventinfo/'.$evn->content_attachment) }}" class="btn btn-default btn-inner">Download Floor Plan</a>
            </div>
          </div>
          <div class="col-lg-5  nopadd">
            <figure>
              <img src="{{URL::asset('upload/eventinfo/'.$evn->content_image) }}" alt="Venue" class="img-fluid" style="max-height: 453px">
            </figure>
          </div>
        </div>
        <?php 
        }
        else{
          ?>
        <div class="row">
         <div class="col-lg-5 col-md-offset-1 nopadd">
            <figure>
              <img src="{{URL::asset('upload/eventinfo/'.$evn->content_image) }}" alt="Venue" class="img-fluid" style="max-height: 453px">
            </figure>
          </div>
          <div class="col-lg-5 nopadd">
            <div class="body-inner-block">
              <h2>{{ $evn->heading }}<br>{{ $evn->sub_heading }}</h2>
              <p class="mb-40">
                {{ $evn->content }}
              </p>
              <a href="{{ url('upload/eventinfo/'.$evn->content_attachment) }}" class="btn btn-default btn-inner">Download Floor Plan</a>
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