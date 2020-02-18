@extends('site.layout.master')
@section('title','Reservation')
@section('content')
</section>
<section class="section-padding contact-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="form-wrapper">
        <h2>leave a message</h2>
        <p>Maecenas accumsan id enim in fermentum. Duis porttitor iaculis liber itae congue. Aliquam finibus euismod arcu, a lobortis erat luctus</p>
        <form id='contact_form' name="enqueryForm" method="post" action="php/email.php">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <input type="text" class="form-control" name="name" placeholder="name">
              </div>
              
              <div class="col-xs-12 col-sm-12">
                <input id="email" type="email" class="form-control" name="email" placeholder="e-mail">
              </div>
              <div class="col-xs-12 col-sm-12">
                <input type="text" class="form-control" name="subject" placeholder="subject">
              </div>
              <div class="col-xs-12 col-sm-12">
                <textarea id="message" class="form-control" rows="4" name="message" placeholder="message"></textarea>
              </div>
              <div class="form-group col-xs-12">
                <div id="mail_success" class="success" style="display:none;">Your message has been sent successfully. </div>
                <div id="mail_fail" class="error" style="display:none;"> Sorry, error occured this time sending your message. </div>
              </div>
              <button id="send_message" class="btn" name="submit" type="submit">submit message</button>
            </div>
          </form>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12769.804844878257!2d174.82424697894464!3d-36.855617228992664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d49c3a989ec83%3A0x500ef6143a2e4f0!2zTWlzc2lvbiBCYXksIOCmheCmleCmsuCnjeCmr-CmvuCmqOCnjeCmoSwg4Kao4Ka_4KaJ4Kac4Ka_4Kay4KeN4Kav4Ka-4Kao4KeN4Kah!5e0!3m2!1sbn!2sbd!4v1580984859690!5m2!1sbn!2sbd"
            width="100%" height="470" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      </div>
    </div>
        <div class="address-wrapper">
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="left">
                <h3>location</h3>
                <p>317 Pacific Coast Highway<br>
                  Huntington Beach, CA 92648</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="middle">
                <h3>table booking</h3>
                <p><a href="tel:0563334555">(056) 333-4555</a><br>
                  <a href="mailto:booking@urbangrill.com">booking@urbangrill.com</a></p>  
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="right">
                <h3>get directions</h3>
                <p>From Airport 3 Minutes Taxi Distance
                From Bus Stop 10 Minutes Walking Distance</p>  
              </div>
            </div>
          </div>
        </div>
      </div>
</section>
@endsection