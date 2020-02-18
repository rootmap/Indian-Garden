

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
              <li class="breadcrumb-item"><a target="_blank" href="{{url('testtwentytwo/create')}}">Create New </a></li>
              <li class="breadcrumb-item"><a target="_blank" href="{{url('testtwentytwo/list')}}"> Data</a></li>
              <li class="breadcrumb-item active">Edit / Modify </li>
            </ol>
            <hr />
            
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
                <h3 class="card-title">Edit Test twenty two</h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                    <li class="page-item"><a class="page-link bg-primary" target="_blank" href="{{url('testtwentytwo/create')}}"> Add New <i class="fas fa-plus"></i></a></li>
                    <li class="page-item"><a class="page-link bg-primary" target="_blank" href="{{url('testtwentytwo/list')}}"> Data <i class="fas fa-table"></i></a></li>
                    <li class="page-item">
                      <a class="page-link bg-primary" target="_blank" href="{{url('testtwentytwo/export/pdf')}}">
                        <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                      </a>
                    </li>
                    <li class="page-item">
                      <a class="page-link bg-primary" target="_blank" href="{{url('testtwentytwo/export/excel')}}">
                        <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                      </a>
                    </li>
                  </ul>
                </div>
            </div>


          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('testtwentytwo/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                        <div class="form-group">
                            <label for="inputGroupSelect07" class="" for="name">Name:</label>
                            <input type="text" 
                             
                        <?php 
                        if(isset($dataRow->name)){
                            ?>
                            value="{{$dataRow->name}}" 
                            <?php 
                        }
                        ?>
                         id="name" name="name" class="form-control" placeholder="PLease Enter Name">
                        </div><!-- end form-group -->
                    <div class="form-group">
                            <label for="inputGroupSelect07" class="" for="category_id">Select Category:</label>
                        <select id="category_id" name="category_id" class="custom-select" size="1">
                            <option value="">Choose</option>
                            @if(count($dataRow_Category)>0)
                                @foreach($dataRow_Category as $Category)
                                    <option 
                            @if(isset($dataRow->id))
                                @if($dataRow->id==$Category->id)
                                    selected="selected" 
                                @endif
                            @endif 
                             value="{{$Category->id}}">{{$Category->name}}</option>
                                    
                                @endforeach
                            @endif
                            
                        </select>
                    </div><div class="form-group"><label for="is_active">    <div class="form-check">
                    <input type="checkbox"  <?php 
                            if($dataRow->is_active=="Active"){
                                ?>
                                checked="checked" 
                                <?php 
                            }
                            ?>
                    name="is_active"  value="Active"  class="form-check-input" id="is_active_0">
                    <label class="form-check-label" for="is_active_0">Active</label>
                </div></div>
                <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="logo">Logo</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file"  class="custom-file-input" id="logo" name="logo">
                            <input type="hidden" value="{{$dataRow->logo}}" name="ex_logo" />
                            <label class="custom-file-label" for="logo">Choose file</label>
                          </div>
                         

                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 pt-4">
                        @if(isset($dataRow->logo))
                            @if(!empty($dataRow->logo))
                                <img src="{{url('upload/testtwentytwo/'.$dataRow->logo)}}" width="150">
                            @endif
                        @endif
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Update</button>
              <button type="reset" class="btn btn-info">Cancel</button>
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
