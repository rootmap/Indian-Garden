@extends('site.layout.master')
@section('title','Career')
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
        <h2>Career</h2>
      </div>
    </div>
  </div>
  <!--===| Gallery Us Banner End|===-->
  <style type="text/css">
    .career-wrapper {
      background: #f8f8f8;
    }
    .list-group-item{
      overflow: hidden;
    }
    .list-group-item h3,p{line-height: 30px;}
    .list-group-item p{
      font-size: 15px;
      font-family: "Sunset";
    }
    .list-group-item h3{
      font-size: 30px;
      font-family: "Sunset";
      line-height: 45px;
      color: #907F47;
    }
    .card-body p{
      font-family: 'Roboto', sans-serif;
    }
    .card-body p b{
      font-weight: 600;
    }
    .btn-sm, .btn-group-sm > .btn {
      padding: 14px 36px;
      font-size: 15px;
      line-height: 1.5;
      border-radius: 3px;
    }
    #exampleModalLabel{
      font-size: 25px;
      padding: 10px;
    }
  </style>
  <!--====| Shuffle Gallery Style Sta rt|====--> 
  <section class="career-wrapper section-gallery-padding">
    <div class="container">
      <div class="row">
        @if (session('status'))
            <div class="alert alert-success successPlace alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fa fa-check"></i> {{ session('status') }}</h5>  
            </div>
            <script type="text/javascript">
                setTimeout(function(){
                    $('.successPlace').fadeOut('slow');
                }, 5000);
            </script>
            <?php 
            Session::forget('status');
            ?>
        @endif
        @if (session('error'))
          <div class="alert alert-danger allDanger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fa fa-ban"></i> Alert! {{ session('error') }}</h5>
                
          </div>
          <script type="text/javascript">
              setTimeout(function(){
                  $('.allDanger').fadeOut('slow');
              }, 5000);
          </script>
          <?php 
          Session::forget('error');
          ?>
      @endif

      @if (count($errors) > 0)
          <div class="alert alert-danger allDanger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fa fa-ban"></i> Alert! </h5>
              @foreach ($errors->all() as $error)
              {{ $error }}<br />
              @endforeach
          </div>
          <script type="text/javascript">
              setTimeout(function(){
                  $('.allDanger').fadeOut('slow');
              }, 10000);
          </script>
      @endif
      @if(!empty($CareerInfo))
      @foreach($CareerInfo as $row)
        <div class="col-md-12 pt-2 pb-5">
          <div class="list-group">
            <div class="list-group-item list-group-item-action flex-column align-items-start">
              <div class="d-flex w-100 justify-content-between mb-2">
                <div class="col-md-10">
                  <h3 class="mb-4 text-primary">{{ $row->title }}
                    <small>
                      <p class="text-muted mb-2 mt-2"><i class="fa fa-calendar-o">&nbsp;</i>
                        Posted On
                      : 
                      <?php 
                        echo date('D,d M Y', strtotime($row->created_at));
                      ?></p>
                      <p class="text-danger mb-2"><i class="fa fa-calendar">&nbsp;</i>
                        Application
                        Deadline
                      : <?php 
                        echo date('D,d M Y', strtotime($row->application_deadline));
                      ?></p>
                      <p class="text-info mb-2"><i class="fa fa-map-marker">&nbsp;</i> Job
                        Location
                      : <?= html_entity_decode($row->job_location)?></p>
                      <p class="text-success"><i class="fa fa-user-plus">&nbsp;</i> Vacancy
                        : {{ $row->vacancy }}
                      </p>
                    </small>
                  </h3>
                </div>
                <div class="col-md-2">
                  <small>
                    <button class="btn btn-success btn-sm mt-2" type="button" data-toggle="collapse" data-target="#collapseExample_2" aria-expanded="false" aria-controls="collapseExample_2">
                      View Detail
                    </button>
                  </small>
                </div>
                
              </div>
              <div class="collapse" id="collapseExample_2"><br>
                <div class="card border-success mb-3" style="width: 100% !important; border: 1px solid #a87f41; display: block; overflow: hidden; padding: 10px; ">
                  <div class="card-body">
                    <p class="card-text text-dark mb-4" style="text-align: left;"></p>
                    <?= html_entity_decode($row->job_details)?>                   
                   
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                      <button type="button" class="btn btn-outline-success btn-sm" data-toggle="collapse" data-target="#collapseExample2_2" aria-expanded="false" aria-controls="collapseExample2_2"><i class="fa fa-check-circle">&nbsp;</i>
                      Apply
                      Online
                    </button>
                    </div>
                    <div class="col-md-4">
                       <a href="#" target="_blank" class="btn btn-outline-success btn-sm"><i class="fa fa-download">&nbsp;</i> Download Job Circular
                      </a>
                    </div>
                    <div class="col-md-2"></div>

                    <!--Application form-->
                    <div class="collapse" id="collapseExample2_2">
                      <form method="post" action="{{ url('career/request') }}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <input type="hidden" name="job_circular_id" value="{{ $row->id }}">
                        <input type="hidden" name="job_title" value="{{ $row->title }}">
                        <div class="row">
                          <div class="col-md-12 mt-4 text-center">
                            <h4 class="text-primary" id="exampleModalLabel">Apply
                            Online</h4>
                            <hr>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Applicant's
                              Fullname *:</label>
                              <input type="text" class="form-control" id="full_name" required="required" name="full_name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Applicant's
                              Email Address *:</label>
                              <input type="email" class="form-control" id="email" required="required" name="email">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Applicant's
                              Phone/Mobile No. *:</label>
                              <input type="text" class="form-control" id="mobile_number" required="required" name="mobile_number">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Expected
                              Salary *:</label>
                              <input type="number" class="form-control" id="salary" name="expected_salary">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Git Repository Link :</label>
                              <input type="text" class="form-control" id="git_link" required="required" name="git_link">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Linkedin Profile Link :</label>
                              <input type="text" class="form-control" id="linkedin_link" name="linkedin_link">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group mt-2">
                              <label for="exampleFormControlFile1">Applicant's
                                Photo *
                              :</label>
                              <input type="file" class="form-control-file  btn-secondary" id="exampleFormControlFile1" name="applicant_photo">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group mt-2">
                              <label for="exampleFormControlFile1">Applicant's CV *
                              :</label>
                              <input type="file" class="form-control-file  btn-secondary" id="exampleFormControlFile1" required="required" name="applicant_cv">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Applicant's
                              Address (Present) *:</label>
                              <textarea rows="2" class="form-control" id="message-text" name="present_address"></textarea>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <button style="width: 300px;" type="submit" class="btn btn-success"><i class="fa fa-check-circle">&nbsp;</i> Submit
                              Application Now
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!--./Application form ends-->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      @endif
      </div><!-- row -->
    </div><!-- container -->
  </section> 
  <!--====| Shuffle Gallery Style End |====-->
  @endsection