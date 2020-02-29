<footer class="" style="background: url({{URL::asset('upload/websitesettings/'.$WebsiteSettings->footer_image)}}); background-size: cover;">
   <div class="footer-top control-overlay">
    <div class="container">
      <div class="row rellax" data-rellax-speed="0">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <h3 class="footer-title">MY ACCOUNT</h3>
          <ul class="list-unstyled">
            <li><a href="#">My Account</a></li>
            <li><a href="#">Order History</a></li>
            <li><a href="#">Wishlist</a></li>
            <li><a href="#">Newsletter</a></li>
            <li><a href="reservation.html">My Reservation</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <h3 class="footer-title">INFORMATION</h3>
          <ul class="list-unstyled">
            <li><a href="about_us.html">About us</a></li>
            <li><a href="#">Delivery Information</a></li>
            <li><a href="contact_us.html">Contact us</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Sitemap</a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <h3 class="footer-title">opening hour</h3>
          <div class="open-time opening-time">
            @if(!empty($OpeningHour))
            @foreach($OpeningHour as $opening)

            <?php 
              if($opening->day_status=="Closed"){
                $class ='class="clock-time"';
              }
              else{
                $class ='';
              }
            ?>
             <p <?= $class?>>
               <strong>{{$opening->day_name}} :</strong> {{$opening->opening_and_closing_hour}}
             </p>
             @endforeach
           @endif
         </div>
       </div>
       
       <div class="col-xs-12 col-sm-6 col-md-3">
         <h3 class="footer-title">contacts</h3>
         <div class="address">
           <p class="icon-map"><i class="fa fa-map-marker"></i><strong>address :</strong>  {{ $setting[0]->address }} </p>
           {{-- <p class="road-details">Road,1422 1st St. Napa.</p> --}}
           <p><i class="fa fa-phone"></i><strong>phone :</strong> <a href="tel:{{ $setting[0]->phone }}">{{ $setting[0]->phone }}</a></p>
           <p><i class="fa fa-envelope"></i><strong>email :</strong><a href="mailto:{{ $setting[0]->email_address }}"> {{ $setting[0]->email_address }}</a></p>
         </div>
         <ul class="list-inline footer-social-list">
          <li><a href="{{ $WebsiteSettings->twitter }}"><i class="flaticon-twitter1"></i></a></li>
          <li><a href="{{ $WebsiteSettings->facebook }}"><i class="flaticon-facebook55"></i></a></li>
          <li><a href="{{ $WebsiteSettings->linkin }}"><i class="flaticon-linkedin11"></i></a></li>
          <li><a href="{{ $WebsiteSettings->google_plus }}"><i class="flaticon-google116"></i></a></li>
          <li><a href="{{ $WebsiteSettings->pinterest }}"><i class="flaticon-pinterest34"></i></a></li>
        </ul>
      </div>

      
    </div>
  </div>
</div>
<div class="footer-bottom">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="copy-right pull-left">
          <p>Copyright-{{date('Y')}} Indian graden</p>
        </div>
        
        <div class="back-top pull-right">
          <i class="fa {{ $WebsiteSettings->bottom_icon }} "></i>
        </div>
      </div>
    </div>
  </div>
</div>
</footer>