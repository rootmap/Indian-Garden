<!DOCTYPE HTML>
<html lang="en" class="no-js">
   <head>
      <!-- Basic -->
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
      <title>@yield('title') | Indian Gadren</title>
      @include('site.include.headerCss')
      @yield('css')
      <style type="text/css">
       .control-overlay {
           background: 0% 0% / cover rgba(0,0,0, 0.5);
       }
     </style>
   </head>
   <body onload="initialize()">
      <div class="loader"></div>
      <!--===| Search Start |===-->
      @include('site.include.search')
      <!--===| Search End |===-->
      <!--===| Pop Up Google Map Start |===-->
      @include('site.include.login')
      <!--===| Pop Up Google Map End |===-->
      <!--===| Header Top Start |===-->
      <div id="offcanvas-container" class="wrapper offcanvas-container">
         <div class="inner-wrapper offcanvas-pusher">
            @include('site.include.header-top')
            <!--===| Header Top End |===-->
            @include('site.include.logo-menu')
            <!-- /header-wrapper -->    
             @yield('content')
            @include('site.include.reservation')
            <!--====| Footer section Start|====-->
            @include('site.include.footer')
            <!--==| Footer section End|==-->
         </div>
         <!--==| .inner-wrapper |==-->
         @include('site.include.mobile_menu')
      </div>
      <!-- .wrapper -->
      @include('site.include.footerJs')
      @yield('js')
   </body>
</html>