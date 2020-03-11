
@extends("admin.layout.master")
@section("title","Edit Career Request")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Career Request</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('careerrequest/list')}}">Datatable </a></li>
              <li class="breadcrumb-item"><a href="{{url('careerrequest/create')}}">Create New </a></li>
              <li class="breadcrumb-item active">Edit / Modify</li>
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
            <h3 class="card-title">Edit / Modify Career Request</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('careerrequest/create')}}"> 
                        Create 
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('careerrequest/list')}}"> 
                        Data 
                        <i class="fas fa-table"></i>
                    </a>
                </li>
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
          <form action="{{url('careerrequest/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="job_circular_id">job circular id</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->job_circular_id)){
                            ?>
                            value="{{$dataRow->job_circular_id}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Job ID" id="job_circular_id" name="job_circular_id">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="job_title">Job Title</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->job_title)){
                            ?>
                            value="{{$dataRow->job_title}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter job_title" id="job_title" name="job_title">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->full_name)){
                            ?>
                            value="{{$dataRow->full_name}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Full Name" id="full_name" name="full_name">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->email)){
                            ?>
                            value="{{$dataRow->email}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter email address" id="email" name="email">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="mobile_number">Mobile Number</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->mobile_number)){
                            ?>
                            value="{{$dataRow->mobile_number}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Mobile Number" id="mobile_number" name="mobile_number">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="expected_salary">Expected Salary</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->expected_salary)){
                            ?>
                            value="{{$dataRow->expected_salary}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Expected Salary" id="expected_salary" name="expected_salary">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="git_link">Git Link</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->git_link)){
                            ?>
                            value="{{$dataRow->git_link}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Git Link" id="git_link" name="git_link">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="linkedin_link">Linkedin Link</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->linkedin_link)){
                            ?>
                            value="{{$dataRow->linkedin_link}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Linkedin Link" id="linkedin_link" name="linkedin_link">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Upload Applicant Photo</label>
                                    <!-- <label for="customFile">Upload Applicant Photo</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="applicant_photo" name="applicant_photo">
                                      <input type="hidden" value="{{$dataRow->applicant_photo}}" name="ex_applicant_photo" />
                                      <label class="custom-file-label" for="customFile">Upload Applicant Photo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->applicant_photo))
                                    @if(!empty($dataRow->applicant_photo))
                                        <img class="img-thumbnail" src="{{url('upload/careerrequest/'.$dataRow->applicant_photo)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Upload Applicant Cv</label>
                                    <!-- <label for="customFile">Upload Applicant Cv</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="applicant_cv" name="applicant_cv">
                                      <input type="hidden" value="{{$dataRow->applicant_cv}}" name="ex_applicant_cv" />
                                      <label class="custom-file-label" for="customFile">Upload Applicant Cv</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="{{url('upload/careerrequest/'.$dataRow->applicant_cv)}}" class="btn btn-primary">
                                    <i class="fas fa-download"></i> 
                                    Download / Open File
                                </a>
                            </div>
                        </div>
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="present_address">Present Address</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Present Address" id="present_address" name="present_address"><?php 
                                if(isset($dataRow->present_address)){
                                    
                                    echo $dataRow->present_address;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                       
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> 
                Update
              </button>
              <a class="btn btn-danger" href="{{url('careerrequest/edit/'.$dataRow->id)}}">
                <i class="far fa-times-circle"></i> 
                Reset
              </a>
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
        