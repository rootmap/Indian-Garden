<div class="header-top">
   <div class="container">
      <div class="row">
         <div class="col-xs-12 hidden-xs col-sm-6">
            <!-- Top right side content -->
            <ul class="fa-ul list-inline top-info level-one">
               <li><i class="fa fa-phone"></i> <a class="tel-no" href="tel:{{ $setting[0]->phone }}">{{ $setting[0]->phone }}</a></li>
            </ul>
         </div>
         <!-- Top right side content top-nav -->
         <div class="col-xs-12 col-sm-6">

            <ul class="list-inline top-social level-one pull-right">
               <li style="color: #fff; ">Choose Language</li>
               <li class="location active"><a href="#" style="color: #c79c60 !important;">ENG </a></li>
               <li class="location"><a href="#">SV </a></li>
               
            </ul>
            <ul class="list-inline top-social level-one pull-right" id="mobnavData">
               <li class="hidden-xs hidden-sm"><a href="{{ $WebsiteSettings->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
               <li class="hidden-xs hidden-sm"><a href="{{ $WebsiteSettings->instagram }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
               <!-- <li><a href="#"><i class="fa fa-tripadvisor"></i></a></li> -->
               <li id="login" class="location"><i class="fa fa-user"></i> Login</li>
               
            </ul>

            
            <!-- <div class="clearfix"></div> -->
         </div>
      </div>
   </div>
</div>