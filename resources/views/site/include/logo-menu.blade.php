<header class="header-wrapper">
   <div class="container">
      <div class="row">
         <div class="col-xs-12">
            <div class="logo">
               <a title="digimo" href="{{ url('index') }}">
               <img id="logo" src="{{URL::asset('upload/sitesettings/'.$setting[0]->site_logo) }}" alt="{{ $setting[0]->site_title }}">
               </a>
            </div>
            <!-- /Logo -->
            <!-- =========================================
               Menu
               ========================================== -->
            <div class="navbar navbar-default mainnav">
               <div class="navbar-header navbar-right pull-right">
                  <div id="offcanvas-trigger-effects" class="column">
                     <button type="button" class="navbar-toggle visible-sm visible-xs" data-toggle="offcanvas" data-target=".navbar-collapse" data-placement="right" data-effect="offcanvas-effect"> <i class="fa fa-bars"></i>
                     </button>
                  </div>
                  <!-- offcanvas-trigger-effects -->
               </div>
               <!-- .navbar-header -->
               <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                     <!-- <li class="active"><a href="index.php">Home</a></li> -->
                     <li class="{{ Request::path() == 'our-history' ? 'active' : '' }}"><a href="{{ url('our-history') }}">Our History</a></li>
                     <li class="{{ Request::path() == 'menu' ? 'active' : '' }}"><a href="{{ url('menu') }}">Menu</a></li>
                     <li class="{{ Request::path() == 'events' ? 'active' : '' }}"><a href="{{ url('events') }}">Events </a></li>
                     <li class="{{ Request::path() == 'gallery' ? 'active' : '' }}"><a href="{{ url('gallery') }}">Gallery </a></li>
                     <li class="{{ Request::path() == 'reservation' ? 'active' : '' }}"><a href="{{ url('gallery') }}"><a href="{{ url('reservation') }}">Reservation & Contact</a></li>
                  </ul>
                  <!-- .navbar-nav -->
               </div>
               <!-- .navbar-collapse -->
            </div>
            <!-- .navbar -->
         </div>
         <!-- .col-xs-12 -->
      </div>
      <!-- .row -->
   </div>
   <!-- .container -->
</header>