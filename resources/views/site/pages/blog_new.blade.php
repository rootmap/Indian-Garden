@extends('site.layout.master')
@section('title','Blog')
@section('content')

<!--===| Gallery Banner Start|===-->
  {{-- <section class="gallery-banner" style="background-image: url({{ url('site/img/custom/our-story-hero.jpg') }});">
    <div class="control-overlay">
      <div class="banner-wrapper control-overlay">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h1>gallery</h1>
                <p>fresh and healthy food available</p>
              </div>
            </div>
          </div>
      </div>
    </div>
  </section> --}}
  <div class="container header-block">
    <div class="row justify-content-center cl-block">
      <div class="common_layout_title">
        <h2>Blog</h2>
      </div>
    </div>
  </div>
  <!--===| Gallery Us Banner End|===-->

  <!--====| Shuffle Gallery Style Sta rt|====--> 
  <section class="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog_grid" data-aos="fade-right">
          <div class="col-lg-6 col-xs-12">
            <img src="https://images.pexels.com/photos/39811/pexels-photo-39811.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
          </div>
          <div class="col-lg-6 col-xs-12">
            <div class="blog-column">
              <span>Post Title</span>
              <ul class="blog-detail list-inline"> 
                <li><i class="fa fa-user"></i>John Doe</li> 
                <li><i class="fa fa-clock-o"></i>March 01, 2017</li> 
              </ul> 
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog_grid" data-aos="fade-right">
          <div class="col-lg-6 col-xs-12">
            <img src="https://images.pexels.com/photos/129105/pexels-photo-129105.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
          </div>
          <div class="col-lg-6 col-xs-12">
            <div class="blog-column">
              <span>Post Title</span>
              <ul class="blog-detail list-inline"> 
                <li><i class="fa fa-user"></i>Josh Doe</li> 
                <li><i class="fa fa-clock-o"></i>August 04, 2017</li> 
              </ul> 
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        {{-- <div class="clearfix" style="margin-top: 20px;"></div> --}}
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog_grid" data-aos="fade-right">
          <div class="col-lg-6 col-xs-12">
            <img src="https://images.pexels.com/photos/129105/pexels-photo-129105.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
          </div>
          <div class="col-lg-6 col-xs-12">
            <div class="blog-column">
              <span>Post Title</span>
              <ul class="blog-detail list-inline"> 
                <li><i class="fa fa-user"></i>Josh Doe</li> 
                <li><i class="fa fa-clock-o"></i>August 04, 2017</li> 
              </ul> 
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog_grid" data-aos="fade-right">
          <div class="col-lg-6 col-xs-12">
            <img src="https://images.pexels.com/photos/129105/pexels-photo-129105.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
          </div>
          <div class="col-lg-6 col-xs-12">
            <div class="blog-column">
              <span>Post Title</span>
              <ul class="blog-detail list-inline"> 
                <li><i class="fa fa-user"></i>Josh Doe</li> 
                <li><i class="fa fa-clock-o"></i>August 04, 2017</li> 
              </ul> 
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 blog_grid" data-aos="fade-right">
          <div class="col-lg-6 col-xs-12">
            <img src="https://images.pexels.com/photos/129105/pexels-photo-129105.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" width="100%">
          </div>
          <div class="col-lg-6 col-xs-12">
            <div class="blog-column">
              <span>Post Title</span>
              <ul class="blog-detail list-inline"> 
                <li><i class="fa fa-user"></i>Josh Doe</li> 
                <li><i class="fa fa-clock-o"></i>August 04, 2017</li> 
              </ul> 
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
              <a href="#">Read More</a>
            </div>
          </div>
        </div>
      </div><!-- row -->
    </div><!-- container -->
  </section> 
  <!--====| Shuffle Gallery Style End |====-->
  @endsection
  @section('css')
  <style type="text/css">
    .ion-minus{
      padding:0px 10px;
    }
    .blog_grid{
      margin-bottom: 20px;
    }
    .blog {
      background-color:#f6f6f6;
      padding:60px 0px;
      font-family: 'Raleway', sans-serif;
    }

    .blog .blog-column a{
      color: #5db4c0;
      text-decoration: none;
    }

    .blog  span {
      font-size: 17px;
      font-weight: 700;
    }

    .blog  .blog-detail {
      margin-top: 10px;
    }
    .fa.fa-user, .fa.fa-clock-o {
      padding-right: 10px;
      color: #909090;
      font-size: 11px;
    }
    .blog-column a {
      color: #907F47;
    }
  </style>
  @endsection