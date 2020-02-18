@extends('site.layout.master')
@section('title','Gallery')
@section('content')
<!--===| Gallery Banner Start|===-->
  <section class="banner-wrapper gallery-banner" style="background-image: url({{ url('site/img/custom/our-story-hero.jpg') }});">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>gallery</h1>
          <p>fresh and healthy food available</p>
        </div>
      </div>
    </div>
  </section>
  <!--===| Gallery Us Banner End|===-->

   <!--====| Shuffle Gallery Style Sta rt|====--> 
  <section class="galleri-wrapper section-padding">
    <div class="container"> 
      <div class="row"> 
        <div class="col-xs-12"> 
          <h1>gallery with Shuffle</h1> 
          <p class="slogan">fresh and healthy food available</p>
        </div>
      </div>

      <div class="row"> 
      <div class="gallery-trigger">
          <ul id="filter">
             <li><a class="active" href="#" data-group="total">all</a></li> 
             <li><a href="#" data-group="appetizer">appetizer</a></li> 
             <li><a href="#" data-group="main-course">main-course</a></li> 
             <li><a href="#" data-group="desserts">desserts</a></li> 
          </ul> 
      </div>

      <div id="grid">
      <!-- portfolio-item -->
          <div class="portfolio-item col-xs-12 col-sm-6 col-md-3" data-groups='["total", "main-course", "desserts"]'>
            <div class="portfolio grid">
            <figure class="effect-cheff gallary-image">
              <img src="http://placehold.it/300x200" alt="Gallery 01"/>
              <figcaption>
                <div class="gallary-hover-text">
                  <a class="yellow-bar fancybox" href="{{url('site/img/gallery-demo.jpg')}}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                </div>
              </figcaption>     
            </figure>
          </div>      
        </div><!-- col-xs-12 -->
        <div class="portfolio-item col-xs-12 col-sm-6 col-md-3" data-groups='["total", "main-course", "appetizer"]'>
            <div class="portfolio grid">
            <figure class="effect-cheff gallary-image">
              <img src="http://placehold.it/300x200" alt="Gallery 01"/>
              <figcaption>
                <div class="gallary-hover-text">
                  <a class="yellow-bar fancybox" href="{{url('site/img/gallery-demo.jpg')}}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                </div>
              </figcaption>     
            </figure>
          </div>      
        </div><!-- col-xs-12 -->
        <div class="portfolio-item col-xs-12 col-sm-6 col-md-3" data-groups='["total", "appetizer", "desserts"]'>
            <div class="portfolio grid">
            <figure class="effect-cheff gallary-image">
              <img src="http://placehold.it/300x200" alt="Gallery 01"/>
              <figcaption>
                <div class="gallary-hover-text">
                  <a class="yellow-bar fancybox" href="{{url('site/img/gallery-demo.jpg')}}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                </div>
              </figcaption>     
            </figure>
          </div>      
        </div><!-- col-xs-12 -->
        <div class="portfolio-item col-xs-12 col-sm-6 col-md-3" data-groups='["total", "main-course", "appetizer"]'>
            <div class="portfolio grid">
            <figure class="effect-cheff gallary-image">
              <img src="http://placehold.it/300x200" alt="Gallery 01"/>
              <figcaption>
                <div class="gallary-hover-text">
                  <a class="yellow-bar fancybox" href="{{url('site/img/gallery-demo.jpg')}}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                </div>
              </figcaption>     
            </figure>
          </div>      
        </div><!-- col-xs-12 -->
        <div class="portfolio-item col-xs-12 col-sm-6 col-md-3" data-groups='["total", "appetizer", "desserts"]'>
            <div class="portfolio grid">
            <figure class="effect-cheff gallary-image">
              <img src="http://placehold.it/300x200" alt="Gallery 01"/>
              <figcaption>
                <div class="gallary-hover-text">
                  <a class="yellow-bar fancybox" href="{{url('site/img/gallery-demo.jpg')}}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                </div>
              </figcaption>     
            </figure>
          </div>      
        </div><!-- col-xs-12 -->
        <div class="portfolio-item col-xs-12 col-sm-6 col-md-3" data-groups='["total", "appetizer", "desserts"]'>
            <div class="portfolio grid"> 
            <figure class="effect-cheff gallary-image">
              <img src="http://placehold.it/300x200" alt="Gallery 01"/>
              <figcaption>
                <div class="gallary-hover-text">
                  <a class="yellow-bar fancybox" href="{{url('site/img/gallery-demo.jpg')}}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                </div>
              </figcaption>     
            </figure>
          </div>      
        </div><!-- col-xs-12 -->
        <div class="portfolio-item col-xs-12 col-sm-6 col-md-3" data-groups='["total", "appetizer", "desserts"]'>
            <div class="portfolio grid"> 
            <figure class="effect-cheff gallary-image">
              <img src="http://placehold.it/300x200" alt="Gallery 01"/>
              <figcaption>
                <div class="gallary-hover-text">
                  <a class="yellow-bar fancybox" href="{{url('site/img/gallery-demo.jpg')}}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                </div>
              </figcaption>     
            </figure>
          </div>      
        </div><!-- col-xs-12 -->
        <div class="portfolio-item col-xs-12 col-sm-6 col-md-3" data-groups='["total", "main-course", "appetizer"]'>
            <div class="portfolio grid"> 
            <figure class="effect-cheff gallary-image">
              <img src="http://placehold.it/300x200" alt="Gallery 01"/>
              <figcaption>
                <div class="gallary-hover-text">
                  <a class="yellow-bar fancybox" href="{{url('site/img/gallery-demo.jpg')}}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                </div>
              </figcaption>     
            </figure>
          </div>      
        </div><!-- col-xs-12 -->
        <div class="portfolio-item col-xs-12 col-sm-6 col-md-3" data-groups='["total", "appetizer", "desserts"]'>
            <div class="portfolio grid"> 
            <figure class="effect-cheff gallary-image">
              <img src="http://placehold.it/300x200" alt="Gallery 01"/>
              <figcaption>
                <div class="gallary-hover-text">
                  <a class="yellow-bar fancybox" href="{{url('site/img/gallery-demo.jpg')}}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                </div>
              </figcaption>     
            </figure>
          </div>      
        </div><!-- col-xs-12 -->
        <div class="portfolio-item col-xs-12 col-sm-6 col-md-3" data-groups='["total", "appetizer", "desserts"]'>
            <div class="portfolio grid"> 
            <figure class="effect-cheff gallary-image">
              <img src="http://placehold.it/300x200" alt="Gallery 01"/>
              <figcaption>
                <div class="gallary-hover-text">
                  <a class="yellow-bar fancybox" href="{{url('site/img/gallery-demo.jpg')}}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                </div>
              </figcaption>     
            </figure>
          </div>      
        </div><!-- col-xs-12 -->
        <div class="portfolio-item col-xs-12 col-sm-6 col-md-3" data-groups='["total", "main-course", "desserts"]'>
            <div class="portfolio grid"> 
            <figure class="effect-cheff gallary-image">
              <img src="http://placehold.it/300x200" alt="Gallery 01"/>
              <figcaption>
                <div class="gallary-hover-text">
                  <a class="yellow-bar fancybox" href="{{url('site/img/gallery-demo.jpg')}}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                </div>
              </figcaption>     
            </figure>
          </div>      
        </div><!-- col-xs-12 -->

        <!-- portfolio-item -->
          <div class="portfolio-item col-xs-12 col-sm-6 col-md-3" data-groups='["total", "appetizer", "main-course", "desserts"]'>
            <div class="portfolio grid"> 
            <figure class="effect-cheff gallary-image">
              <img src="http://placehold.it/300x200" alt="Gallery 01"/>
              <figcaption>
                <div class="gallary-hover-text">
                  <a class="yellow-bar fancybox" href="{{url('site/img/gallery-demo.jpg')}}" data-fancybox-group="gallery"><i class="fa fa-plus"></i></a>
                  <p>chicken seasoned with herbs</p>
                </div>
              </figcaption>     
            </figure>
          </div>      
        </div><!-- col-xs-12 -->
      </div> <!-- grid -->
    </div><!-- row -->
  </div><!-- container -->
</section> 
<!--====| Shuffle Gallery Style End |====-->
@endsection