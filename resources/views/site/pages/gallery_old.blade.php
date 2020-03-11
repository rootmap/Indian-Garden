@extends('site.layout.master')
@section('title','Gallery')
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
        <h2>Gallery</h2>
      </div>
    </div>
  </div>
  <!--===| Gallery Us Banner End|===-->

   <!--====| Shuffle Gallery Style Sta rt|====--> 
  <section class="galleri-wrapper section-gallery-padding">
    <div class="container">
      <div class="row"> 
      <div class="gallery-trigger">
          <ul id="filter">
             <li><a class="active" href="#" data-group="total">all</a></li> 
             @if(count($category)>0)
                @foreach($category as $c)
                  <li><a href="#" data-group="{{ $c->name }}">{{ $c->name }}</a></li> 
                @endforeach
             @endif
          </ul> 
      </div>

      <div id="grid">
      <!-- portfolio-item -->
          @if(count($gallery)>0)
              @foreach($gallery as $g)
                  <div class="portfolio-item col-xs-12 col-sm-6 col-md-3 fancybox" data-groups='["total", "{{ $g->category_name }}"]'  href="{{url('upload/gallery/'.$g->gallery_image)}}" data-fancybox-group="gallery">
                    <div class="portfolio grid">
                    <figure class="effect-cheff gallary-image">
                      <img src="{{url('upload/gallery/small/'.$g->gallery_image)}}"  alt="Gallery 01"/>
                      <!-- <figcaption>
                        <div class="gallary-hover-text">
                          <a class="yellow-bar fancybox" href="{{url('upload/gallery/'.$g->gallery_image)}}" data-fancybox-group="gallery"><i class="fa fa-search-plus"></i></a>
                          <p>{{ $g->gallery_content }}</p>
                        </div>
                      </figcaption>     
                    </figure> -->
                  </div>      
                </div><!-- col-xs-12 -->
            @endforeach
        @endif
        
      </div> <!-- grid -->
    </div><!-- row -->



</div>
  </div><!-- container -->
</section> 
<!--====| Shuffle Gallery Style End |====-->




{{-- <div class="demo">
        <div class="item">            
            <div class="clearfix" >
                <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-1.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-1.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-2.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-2.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-3.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-3.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-4.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-4.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-5.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-5.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-6.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-6.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-7.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-7.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-8.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-8.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-9.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-9.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-10.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-10.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-11.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-11.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-12.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-12.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-13.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-13.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-14.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-14.jpg') }}" />
                         </li>
                    <li data-thumb="{{ url('site/lightslider/demo/img/thumb/cS-15.jpg') }}"> 
                        <img src="{{ url('site/lightslider/demo/img/cS-15.jpg') }}" />
                         </li>
                </ul>
            </div>
        </div>
        <div class="item">
            <ul id="content-slider" class="content-slider">
                <li>
                    <h3>1</h3>
                </li>
                <li>
                    <h3>2</h3>
                </li>
                <li>
                    <h3>3</h3>
                </li>
                <li>
                    <h3>4</h3>
                </li>
                <li>
                    <h3>5</h3>
                </li>
                <li>
                    <h3>6</h3>
                </li>
            </ul>
        </div>
</div>   --}}



@endsection

@section('css')
<!-- <style type="text/css">
  .effect-cheff
  {
      /* [1.2] Hide the overflowing of child elements */
  }
  .effect-cheff img
  {
    transition: all 6s ease;
    -moz-transition: all 6s ease;
    -ms-transition: all 6s ease;
    -webkit-transition: all 6s ease;
    -o-transition: all 6s ease;

    transition-delay:100s;
    transition-duration: 0.5s;
    transition-property: all;
  }

  .effect-cheff:hover img
  {
      transform: scale(1.1);
      opacity: 0.9;
  }
</style> -->


@endsection