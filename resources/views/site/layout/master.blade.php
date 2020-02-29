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
      @include('site.include.reset')
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
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- <script src="{{url('parallax/parallax.js')}}"></script>
      <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.2.0/dist/simpleParallax.min.js"></script> -->
      <script src="{{url('rellax/rellax.min.js')}}"></script>
      <script src="http://a.vimeocdn.com/js/froogaloop2.min.js"></script>
      <script>
        // Accepts any class name
        var rellax = new Rellax('.rellax');
      </script>
      @yield('js')
      <script type="text/javascript">



          $(document).ready(function(){


            $("#playVidemomo").css("height",$('#ifvemo').height());
            $("#playVidemomo").css("margin-top",-$('#ifvemo').height());
            $("#playVidemomo").css("width",$('#ifvemo').width());
              

             $("#loadvideos").click(function(){
                $("#videos").css("padding-top","149px");
                $('html, body').animate({
                    scrollTop: $("#videos").offset().top
                }, 1000);
             });

             $("#playVidemomo").click(function(){
                $("#playVidemomo").hide();

              var iframe = $('#ifvemo')[0];

              

              var player = $f(iframe);

              //$('#stop').click(function() {
                //  alert('stoped');
               //   player.api('pause');
              //});


              //$('#play').click(function(){
                  //alert('play');
                  player.api('play');
              //})
             });

             $('.hero').css('padding-top','3em');


             var sliderShowArea=$(window).height()-102;
             $('#slider-container-area').css('height',sliderShowArea);

             if(sliderShowArea>=1000)
               {
                  $('#buttonRea').css('padding-top','10em');
                  $('#logoarearea').css('padding-top','6em');
               } 
               else if(sliderShowArea>=900)
               {
                  $('#buttonRea').css('padding-top','9.5em');
                  $('#logoarearea').css('padding-top','5em');
               }
               else if(sliderShowArea>=800)
               {
                  $('#buttonRea').css('padding-top','8em');
                  $('#logoarearea').css('padding-top','4em');
               }
               else if(sliderShowArea>=700)
               {
                  $('#buttonRea').css('padding-top','7em');
                  $('#logoarearea').css('padding-top','3.5em');
               }
               else if(sliderShowArea>=600)
               {
                  $('#buttonRea').css('padding-top','6em');
                  $('#logoarearea').css('padding-top','3em');
               }
               else if(sliderShowArea>=500)
               {
                  $('#buttonRea').css('padding-top','3em');
                  $('#logoarearea').css('padding-top','1.5em');
               }
               else
               {
                  $('#buttonRea').css('padding-top','3em');
                  $('#logoarearea').css('padding-top','1.5em');
               }
             

             $(document).scroll(function(){
                console.log($(window).height());
             });

             $( window ).resize(function() {
                var sliderShowArea=$(window).height()-102;
                $('#slider-container-area').css('height',sliderShowArea);
                console.log($(window).height()-102);

               if(sliderShowArea>=1000)
               {
                  $('#buttonRea').css('padding-top','10em');
                  $('#logoarearea').css('padding-top','6em');
                  
               } 
               else if(sliderShowArea>=900)
               {
                  $('#buttonRea').css('padding-top','9.5em');
                  $('#logoarearea').css('padding-top','5em');
               }
               else if(sliderShowArea>=800)
               {
                  $('#buttonRea').css('padding-top','8em');
                  $('#logoarearea').css('padding-top','4em');
               }
               else if(sliderShowArea>=700)
               {
                  $('#buttonRea').css('padding-top','7em');
                  $('#logoarearea').css('padding-top','3.5em');
               }
               else if(sliderShowArea>=600)
               {
                  $('#buttonRea').css('padding-top','6em');
                  $('#logoarearea').css('padding-top','3em');
               }
               else if(sliderShowArea>=500)
               {
                  $('#buttonRea').css('padding-top','3em');
                  $('#logoarearea').css('padding-top','1.5em');
               }
               else
               {
                  $('#buttonRea').css('padding-top','3em');
                  $('#logoarearea').css('padding-top','1.5em');
               }


            });

             $("#loginsubmit").click(function(){

                  var email_login=$("input[name=email_login]").val();
                  var password_login=$("input[name=password_login]").val();

                  if(email_login.length==0)
                  {
                      swal({
                        title: "Warning",
                        text: "Email address required!",
                        icon: "error",
                        button: "Ok",
                      });

                      return false;
                  }

                  if(password_login.length==0)
                  {
                      swal({
                        title: "Warning",
                        text: "Password required!",
                        icon: "error",
                        button: "Ok",
                      });

                      return false;
                  }

                  $(this).html('<i class="fa fa-unlock" aria-hidden="true"></i> Login <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');

                  var logincustomer="{{url('customer/login')}}";

                  $.ajax({
                      'async': false,
                      'type': "POST",
                      'global': false,
                      'dataType': 'json',
                      'url': logincustomer,
                      'data':{'email':email_login,'password':password_login,'_token':'{{csrf_token()}}'},
                      'success': function (data) {
                          $("#cartMessageProShow").html(successMessage("Product Added To Cart Successfully.")); 
                      }
                  });


                  return false;
              });
          });

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

 /*         .theme-background-color {
    background-color: #03a84e;
}*/

      });
      
      </script>
      <!--End of Tawk.to Script-->
   </body>
</html>