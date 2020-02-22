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
  <div class="container">
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
                  <div class="portfolio-item col-xs-12 col-sm-6 col-md-3" data-groups='["total", "{{ $g->category_name }}"]'>
                    <div class="portfolio grid">
                    <figure class="effect-cheff gallary-image">
                      <img src="{{url('upload/gallery/'.$g->gallery_image)}}" alt="Gallery 01"/>
                      <figcaption>
                        <div class="gallary-hover-text">
                          <a class="yellow-bar fancybox" href="{{url('upload/gallery/'.$g->gallery_image)}}" data-fancybox-group="gallery"><i class="fa fa-search-plus"></i></a>
                          <p>{{ $g->gallery_content }}</p>
                        </div>
                      </figcaption>     
                    </figure>
                  </div>      
                </div><!-- col-xs-12 -->
            @endforeach
        @endif
        
      </div> <!-- grid -->
    </div><!-- row -->
  </div><!-- container -->
</section> 
<!--====| Shuffle Gallery Style End |====-->
@endsection