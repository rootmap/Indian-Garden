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
      @include('site.include.signup')
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
            $("#logsignup").attr("style","padding-top:0px;"); 
            $(".font-5-slider").attr("style","position: absolute; left: 0px; right: 0px; font-size:17px;"); 
            
            $("#mobnavData").removeClass("pull-right"); 
            $("#mobnavData").addClass("pull-left"); 
          }
          else
          { 
            $("#logsignup").attr("style","padding-top:7%;");
            $(".font-5-slider").attr("style","position: absolute; left: 0px; right: 0px; font-size:48px;");  
            $("#mobnavData").addClass("pull-right"); 
            $("#mobnavData").removeClass("pull-left"); 
          }

          $("#logsignupexit").click(function(){
              $("#loginArea").fadeOut('slow');
          });


      </script>
      <!--Start of Tawk.to Script-->
      <script type="text/javascript">
      $(document).ready(function(){

          //$(".typewriter").hide().show("slide", { direction: "left" }, 1500);


          var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
          (function(){
          var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
          s1.async=true;
          s1.src='https://embed.tawk.to/5e4f9c25298c395d1ce90fdd/default';
          s1.charset='UTF-8';
          s1.setAttribute('crossorigin','*');
          s0.parentNode.insertBefore(s1,s0);
          })();
      });
      
      </script>
      <!--End of Tawk.to Script-->
   </body>
</html>