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
        <h2>Blog Details</h2>
      </div>
    </div>
  </div>
  <!--===| Gallery Us Banner End|===-->
 
  <!--====| Shuffle Gallery Style Sta rt|====--> 
  <section class="menus">
    <div class="container">
      <div class="row"> 
        <div class="col-sm-6 col-md-8 col-lg-8 mb-1">
          <h3>How to stop being an entrepreneur and become one</h3>
          <p class="text-muted"> <span class="fa fa-user" aria-hidden="true"></span> Lorem Ipsum | <span class="fa fa-eye" aria-hidden="true"></span> 50 | <span class="fa fa-calendar" aria-hidden="true"></span> Jan/21/2018</p>
          <div><br>

            {{-- <div class="col-md-4 pull-right">
              <img src="https://images.pexels.com/photos/392018/pexels-photo-392018.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-responsive">
            </div>
            <div class="col-md-8">
              <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div> --}}

            <img src="https://images.pexels.com/photos/392018/pexels-photo-392018.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-responsive" style="width: 50%; float: right; padding-left: 15px;">
            <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-4" style="margin-top: 10px">
        <div class="panel panel-default">
          <div class="panel-body">

            {{-- <h4 class="text-center">Search for Posts!</h4>
            <form role="Form" method="GET" action="" accept-charset="UTF-8">
              <div class="form-group">
                <div class="input-group">
                  <input class="form-control" type="text" name="search" placeholder="Search..." required/>
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                  </span>
                </div>
              </div>
            </form> --}}

            

            <h4 class="text-center">Popular Posts!</h4>
            <div class="row">
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src="https://images.pexels.com/photos/301930/pexels-photo-301930.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-thumbnail img-responsive">
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <h5>Images by pexels.com</h5>
                <p class="text-muted"><span class="fa fa-calendar" aria-hidden="true"></span> Jan/21/2018</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src="https://images.pexels.com/photos/34601/pexels-photo.jpg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-thumbnail img-responsive">
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <h5>Images by pexels.com</h5>
                <p class="text-muted"><span class="fa fa-calendar" aria-hidden="true"></span> Jan/21/2018</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src="https://images.pexels.com/photos/459688/pexels-photo-459688.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-thumbnail img-responsive">
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <h5>Images by pexels.com</h5>
                <p class="text-muted"><span class="fa fa-calendar" aria-hidden="true"></span> Jan/21/2018</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src="https://images.pexels.com/photos/273222/pexels-photo-273222.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-thumbnail img-responsive">
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <h5>Images by pexels.com</h5>
                <p class="text-muted"><span class="fa fa-calendar" aria-hidden="true"></span> Jan/21/2018</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <img src="https://images.pexels.com/photos/392018/pexels-photo-392018.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-thumbnail img-responsive">
              </div>
              <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                <h5>Images by pexels.com</h5>
                <p class="text-muted"><span class="fa fa-calendar" aria-hidden="true"></span> Jan/21/2018</p>
              </div>
            </div>
            <hr>

            
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
    h3, .h3 {
        font-size: 24px;
    }
    h4, .h4 {
        font-size: 18px;
    }
    h5, .h5 {
        font-size: 14px;
    }
    h1, .h1, h2, .h2, h3, .h3, h4, .h4,h5, .h5 {
        margin-top: 20px;
        margin-bottom: 10px;
    }
    
    </style>
    @endsection