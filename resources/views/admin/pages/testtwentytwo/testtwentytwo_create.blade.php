
@extends("admin.layout.master")
@section("title","Test twenty two")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Test twenty two</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a target="_blank" href="{{url('testtwentytwo/list')}}">Test twenty two Data</a></li>
          <li class="breadcrumb-item active">Create New Test twenty two</li>
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
            <h3 class="card-title">Create New Test twenty two Data</h3>

            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item"><a class="page-link bg-primary" target="_blank" href="{{url('testtwentytwo/list')}}"> Data <i class="fas fa-table"></i></a></li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('testtwentytwo/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('testtwentytwo/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('testtwentytwo')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="PLease Enter Name">
                        </div><!-- end form-group -->
                        
                        <div class="form-group">
                            <label for="category_id">Select Category:</label>
                        <select id="category_id" name="category_id" class="form-control select2" size="1">
                        <option value="">Choose</option>
                        @if(isset($dataRow_Category))    
                            @if(count($dataRow_Category)>0)
                                @foreach($dataRow_Category as $Category)
                                    <option value="{{$Category->id}}">{{$Category->name}}</option>
                                    
                                @endforeach
                            @endif
                        @endif 
                        
                        </select>
                    </div><div class="form-group"><label for="is_active"></label>    <div class="form-check">
                    <input type="checkbox" 
                    name="is_active"  value="Active"  class="form-check-input" id="is_active_0">
                    <label class="form-check-label" for="is_active_0">Active</label>
                </div></div>
                <div class="form-group">
                    <label for="logo">Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo" name="logo">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
              <button type="reset" class="btn btn-info">Reset</button>
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