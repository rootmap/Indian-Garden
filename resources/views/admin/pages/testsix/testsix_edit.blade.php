
@extends("admin.layout.master")
@section("title","Edit Test Six")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Test Six</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('testsix/list')}}">Datatable </a></li>
              <li class="breadcrumb-item"><a href="{{url('testsix/create')}}">Create New </a></li>
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
            <h3 class="card-title">Edit / Modify Test Six</h3>

            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('testsix/create')}}"> 
                        Create 
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('testsix/list')}}"> 
                        Data 
                        <i class="fas fa-table"></i>
                    </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('testsix/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('testsix/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('testsix/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Select Sex</label>
                                  <select class="form-control select2" style="width: 100%;"  id="gender" name="gender">
                                    
        <option value="">Please select</option>
            <option 
                    <?php 
                    if($dataRow->gender=="Male"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="Male">Male</option>
            <option 
                    <?php 
                    if($dataRow->gender=="Female"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="Female">Female</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Select Module Status</label>
                                  <select class="form-control select2" style="width: 100%;"  id="module_status" name="module_status">
                                    
        <option value="">Please select</option>
            <option 
                    <?php 
                    if($dataRow->module_status=="Active"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="Active">Active</option>
            <option 
                    <?php 
                    if($dataRow->module_status=="Inactive"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="Inactive">Inactive</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label for="customFile">Please Upload Your Logo</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="logo" name="logo">
                                      <input type="hidden" value="{{$dataRow->logo}}" name="ex_logo" />
                                      <label class="custom-file-label" for="customFile">Please Upload Your Logo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->logo))
                                    @if(!empty($dataRow->logo))
                                        <img class="img-thumbnail" src="{{url('upload/testsix/'.$dataRow->logo)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label for="customFile">Please Upload Your files</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="download_files" name="download_files">
                                      <input type="hidden" value="{{$dataRow->download_files}}" name="ex_download_files" />
                                      <label class="custom-file-label" for="customFile">Please Upload Your files</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="{{url('upload/testsix/'.$dataRow->download_files)}}" class="btn btn-primary">
                                    <i class="fas fa-download"></i> 
                                    Download / Open File
                                </a>
                            </div>
                        </div>       
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">
                <i class="fas fa-save"></i> 
                Update
              </button>
              <a class="btn btn-danger" href="{{url('testsix/edit/'.$dataRow->id)}}">
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
@section("css")
    
    <link rel="stylesheet" href="{{url('admin/plugins/select2/css/select2.min.css')}}">
    
@endsection
        
@section("js")

    <script src="{{url('admin/plugins/select2/js/select2.full.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        $(".select2").select2();
    });
    </script>

    <script src="{{url('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        bsCustomFileInput.init();
    });
    </script>

@endsection
        