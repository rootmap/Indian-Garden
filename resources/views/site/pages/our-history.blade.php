@extends('site.layout.master')
@section('title','Our History')
@section('content')
<section class="our-story cl-block">
  <div class="container">
    <div class="row justify-content-center">
      <div class="common_layout_title">
        <h2>MADRE'S STORY</h2>
      </div>
    </div>
  </div>
  <!-- Common Layout Hero -->
  <div class="cl-hero" data-parallax="scroll" style="background-image: url({{ url('site/img/custom/our-story-hero.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-offset-6">
          <div class="hero-inner-block">
            <h2>Our<br>Story</h2>
            <p>
              I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click
              “Edit Text” or double click me to add your own content and make changes to the font.
              Feel free to drag and drop me anywhere you like on your page.
              I’m a great place for you to tell a story and let your users know a little more about
              you.
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
      
      <div class="row">
        <div class="col-lg-5 col-lg-offset-1 nopadd">
          <figure>
            <img src="{{ url('site/img/custom/side-img.jpg') }}" alt="Venue" class="img-fit" style="height: 416px;">
          </figure>
        </div>
        <div class="col-lg-5  nopadd">
          <div class="body-inner-block">
            <h2>Since<br>1986</h2>
            <p class="mb-40">
              I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click
              “Edit Text” or double click me to add your own content and make changes to the font.
            </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 col-lg-offset-1 nopadd">
          <div class="body-inner-block">
            <h2>Since<br>1986</h2>
            <p class="mb-40">
              I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click
              “Edit Text” or double click me to add your own content and make changes to the font.
            </p>
          </div>
        </div>
        <div class="col-lg-5 nopadd">
          <figure>
            <img src="{{ url('site/img/custom/side-img.jpg') }}" alt="Venue" class="img-fit" style="height: 416px;">
          </figure>
        </div>
      </div>
    </div>
  </div>
  <!-- /Common Layout Body -->
</section>
@endsection