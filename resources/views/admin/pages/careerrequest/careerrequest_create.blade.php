
@extends("admin.layout.master")
@section("title","Create New Career Request")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Career Request</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('careerrequest/list')}}">Career Request Data</a></li>
              <li class="breadcrumb-item active">Create New Career Request</li>
            </ol>
      </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @include("admin.include.msg")
        </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
<section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-8 offset-2">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Create New Career Request</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a class="page-link bg-primary" href="{{url('careerrequest/list')}}"> Data <i class="fas fa-table"></i></a></li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('careerrequest/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('careerrequest/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>            
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('careerrequest')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="job_circular_id">job circular id</label>
                        <input type="text" class="form-control" placeholder="Enter Job ID" id="job_circular_id" name="job_circular_id">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="job_title">Job Title</label>
                        <input type="text" class="form-control" placeholder="Enter job_title" id="job_title" name="job_title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter Full Name" id="full_name" name="full_name">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" placeholder="Enter email address" id="email" name="email">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="mobile_number">Mobile Number</label>
                        <input type="text" class="form-control" placeholder="Enter Mobile Number" id="mobile_number" name="mobile_number">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="expected_salary">Expected Salary</label>
                        <input type="text" class="form-control" placeholder="Enter Expected Salary" id="expected_salary" name="expected_salary">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="git_link">Git Link</label>
                        <input type="text" class="form-control" placeholder="Enter Git Link" id="git_link" name="git_link">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="linkedin_link">Linkedin Link</label>
                        <input type="text" class="form-control" placeholder="Enter Linkedin Link" id="linkedin_link" name="linkedin_link">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Upload Applicant Photo</label>
                                    <!-- <label for="customFile">Upload Applicant Photo</label> -->

                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="applicant_photo" name="applicant_photo">
                                      <label class="custom-file-label" for="customFile">Upload Applicant Photo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Upload Applicant Cv</label>
                                    <!-- <label for="customFile">Upload Applicant Cv</label> -->

                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="applicant_cv" name="applicant_cv">
                                      <label class="custom-file-label" for="customFile">Upload Applicant Cv</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="present_address">Present Address</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Present Address" id="present_address" name="present_address"></textarea>
                      </div>
                    </div>
                </div>
                       
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
              <a class="btn btn-danger" href="{{url('careerrequest/create')}}"><i class="far fa-times-circle"></i> Reset</a>
            </div>
          </form>
        </div>
        <!-- /.card -->

      </div>
      <!--/.col (left) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
@endsection
@section("js")

    <script src="{{url('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        bsCustomFileInput.init();
    });
    </script>

@endsection
        