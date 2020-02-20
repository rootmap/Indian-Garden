@extends('site.layout.master')
@section('title','Reservation')
@section('content')
<section class="events cl-block">
    <div class="container">
      <div class="row justify-content-center">
        <div class="common_layout_title">
          <h2>CONTACT US</h2>
        </div>
      </div>
    </div>
    <!-- Common Layout Hero -->
    <div class="cl-hero" data-parallax="scroll" style="background-image: url({{ url('site/img/custom/event-hero.jpg') }});">
    <div class="container">
      <div class="row">

        @if (\Session::has('success'))
        <script type="text/javascript">
          Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: 'Your message has been sent successfully',
            showConfirmButton: false,
            timer: 2000
          })
        </script>
          
      @endif
        <div class="col-md-5 col-md-offset-6">
          <div class="hero-inner-block" style="padding: 35px 60px;">
              <h2>Book A Table</h2>
              <form action="{{url('reservation/request')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                  <input id="name" name="name" class="form-control form-control-lg" type="text" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <input id="email" name="email" class="form-control form-control-lg" type="email" placeholder="Enter your email address">
                </div>
                <div class="form-group">
                  <input id="datepicker" class="form-control form-control-lg" name="reservations_date" type="text" placeholder="Select Date">
                </div>
                <div class="form-group">
                  <input class="form-control form-control-lg" id="timepicker" type="text" name="reservations_time" type="text" placeholder="Enter Time">
                </div>
                <input type="hidden" name="reservations_status" value="Pending">
                <div class="form-group">
                  <select name="person" class="form-control form-control-lg">
                    <option value="">Select person</option>
                    <option value="1 person">1 person</option>
                    <option value="2 person">2 person</option>
                    <option value="3 person">3 person</option>
                    <option value="4 person">4 person</option>
                    <option value="5 person">5 person</option>
                    <option value="6 person">6 person</option>
                  </select>
                </div>
                <div class="form-group">
                  <button class="btn btn-block btn-form">Book a table now</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
  </div>
    <!-- /Common Layout Hero -->
  </section>
<section class="section-padding contact-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="form-wrapper">
        <h2>CONTACT US</h2>
        {{-- <p>Maecenas accumsan id enim in fermentum. Duis porttitor iaculis liber itae congue. Aliquam finibus euismod arcu, a lobortis erat luctus</p> --}}
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
              <input id="basicExample" type="text" class="time" />
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
                <p>{{$setting[0]->address}}</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-4">
              <div class="middle">
                <h3>table booking</h3>
                <p><a href="tel:{{$setting[0]->phone}}">{{$setting[0]->phone}}</a><br>
                  <a href="mailto:{{$setting[0]->email_address}}">{{$setting[0]->email_address}}</a></p>  
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
@section('css')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
@endsection
@section('js')

{{-- <script type="text/javascript">
  Swal.fire({
    position: 'top-center',
    icon: 'success',
    title: 'Your message has been sent successfully',
    showConfirmButton: false,
    timer: 2000
  })
</script> --}}
@endsection