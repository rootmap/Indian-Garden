
@extends("admin.layout.master")
@section("title","Create New Test File")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Test File</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('testfile/list')}}">Test File Data</a></li>
              <li class="breadcrumb-item active">Create New Test File</li>
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
            <h3 class="card-title">Create New Test File</h3>

            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a class="page-link bg-primary" href="{{url('testfile/list')}}"> Data <i class="fas fa-table"></i></a></li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('testfile/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('testfile/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('testfile')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <!-- <label for="customFile">Please Upload Your Logo</label> -->

                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="logo" name="logo">
                                      <label class="custom-file-label" for="customFile">Please Upload Your Logo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <!-- <label for="customFile">Please Upload Your Dile</label> -->

                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="download_file" name="download_file">
                                      <label class="custom-file-label" for="customFile">Please Upload Your Dile</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Please Dropdown</label>
                                  <select class="form-control select2" style="width: 100%;"  id="static_dropdown" name="static_dropdown">
                                    
        <option value="">Please select</option>
            <option 
            value="Red">Red</option>
            <option 
            value="Green">Green</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Please Dropdown</label>
                                  <select class="form-control select2" style="width: 100%;"  id="dynamic_dropdown" name="dynamic_dropdown">
                                        <option value="">Please Select</option>
                                        @if(isset($dataRow_Category))    
                                            @if(count($dataRow_Category)>0)
                                                @foreach($dataRow_Category as $Category)
                                                    <option value="{{$Category->id}}">{{$Category->name}}</option>
                                                    
                                                @endforeach
                                            @endif
                                        @endif 
                                        
                                  </select>
                                </div>
                            </div>
                        </div>
                    
        <div class="row">
            <div class="col-sm-12">
              <!-- checkbox -->
              <div class="form-group">
              <label>Is Status Active</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" 
                          id="is_active_0" name="is_active" value="Active">
                          <label class="form-check-label">Active</label>
                        </div>
                
                    </div>
                </div>
            </div>
            
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Select Module Status</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="module_status_0" name="module_status" value="Male">
                          <label class="form-check-label">Male</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio" 
                          id="module_status_1" name="module_status" value="Female">
                          <label class="form-check-label">Female</label>
                        </div>
                
                    </div>
                </div>
            </div>
                   
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
              <a class="btn btn-danger" href="{{url('testfile/create')}}"><i class="far fa-times-circle"></i> Reset</a>
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
  <link rel="stylesheet" href="{{url('admin/plugins/select2/css/select2.min.css')}}">
@endsection

@section('js')
<script src="{{url('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{url('admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<script>
$(document).ready(function(){
    $('.select2').select2();
    bsCustomFileInput.init();
});
    //Initialize Select2 Elements
</script>
@endsection