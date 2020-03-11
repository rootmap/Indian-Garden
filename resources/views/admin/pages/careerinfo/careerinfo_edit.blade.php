
@extends("admin.layout.master")
@section("title","Edit Career Info")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Career Info</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('careerinfo/list')}}">Datatable </a></li>
              <li class="breadcrumb-item"><a href="{{url('careerinfo/create')}}">Create New </a></li>
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
      <div class="col-md-10 offset-1">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit / Modify Career Info</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('careerinfo/create')}}"> 
                        Create 
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('careerinfo/list')}}"> 
                        Data 
                        <i class="fas fa-table"></i>
                    </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('careerinfo/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('careerinfo/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('careerinfo/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-md-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->title)){
                            ?>
                            value="{{$dataRow->title}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Job Title" id="title" name="title">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="vacancy">Vacancy</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->vacancy)){
                            ?>
                            value="{{$dataRow->vacancy}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Vacancy" id="vacancy" name="vacancy">
                      </div>
                    </div>
                </div>
                
                
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="job_location">Job Location</label>
                        <textarea class="form-control" rows="3"  placeholder="Enter Job Location" id="job_location" name="job_location"><?php 
                                if(isset($dataRow->job_location)){
                                    
                                    echo $dataRow->job_location;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="job_details">Job Details</label>
                        <textarea class="form-control textarea" rows="3"  placeholder="Enter Job Details" id="job_details" name="job_details"><?php 
                                if(isset($dataRow->job_details)){
                                    
                                    echo $dataRow->job_details;
                                    
                                }
                                ?></textarea>
                      </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="application_deadline">Application Deadline</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->application_deadline)){
                            ?>
                            value="{{$dataRow->application_deadline}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Select Application Deadline" id="datepicker" name="application_deadline">
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
              <a class="btn btn-danger" href="{{url('careerinfo/edit/'.$dataRow->id)}}">
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
@section('css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{ url('admin/plugins/summernote/summernote-bs4.css') }}">
@endsection
@section('js')
<script src="{{ url('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })
</script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {

    $( "#datepicker" ).datepicker();
  } );
  </script>
@endsection
