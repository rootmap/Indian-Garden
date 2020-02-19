
@extends("admin.layout.master")
@section("title","Edit Test Four")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Test Four</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('testfour/list')}}">Datatable </a></li>
              <li class="breadcrumb-item"><a href="{{url('testfour/create')}}">Create New </a></li>
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
            <h3 class="card-title">Edit / Modify Test Four</h3>

            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('testfour/create')}}"> 
                        Create 
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('testfour/list')}}"> 
                        Data 
                        <i class="fas fa-table"></i>
                    </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('testfour/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('testfour/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('testfour/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Select Category</label>
                                  <select class="form-control select2" style="width: 100%;"  id="category" name="category">
                                    
        <option value="">Please select</option>
            <option 
                    <?php 
                    if($dataRow->category=="Male"){
                        ?>
                        selected="selected" 
                        <?php 
                    }
                    ?> 
            value="Male">Male</option>
            <option 
                    <?php 
                    if($dataRow->category=="Female"){
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
                                        <img class="img-thumbnail" src="{{url('upload/testfour/'.$dataRow->logo)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <!-- <label for="customFile">Please Upload Your files</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="donwload_files" name="donwload_files">
                                      <input type="hidden" value="{{$dataRow->donwload_files}}" name="ex_donwload_files" />
                                      <label class="custom-file-label" for="customFile">Please Upload Your files</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <a href="{{url('upload/testfour/'.$dataRow->donwload_files)}}" class="btn btn-primary">
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
              <a class="btn btn-danger" href="{{url('testfour/edit/'.$dataRow->id)}}">
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