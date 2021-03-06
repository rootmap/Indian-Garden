
@extends("admin.layout.master")
@section("title","Edit Menu Page Info")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Menu Page Info</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Update Menu Page Info</li>
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
            <h3 class="card-title">Edit / Modify Menu Page Info</h3>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('menupageinfo/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="heading">Heading</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->heading)){
                            ?>
                            value="{{$dataRow->heading}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Heading" id="heading" name="heading">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="sub_heading">Sub Heading</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->sub_heading)){
                            ?>
                            value="{{$dataRow->sub_heading}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Sub Heading" id="sub_heading" name="sub_heading">
                      </div>
                    </div>
                </div>
                
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Header Image</label>
                                    <!-- <label for="customFile">Choose Header Image</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="header_image" name="header_image">
                                      <input type="hidden" value="{{$dataRow->header_image}}" name="ex_header_image" />
                                      <label class="custom-file-label" for="customFile">Choose Header Image</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->header_image))
                                    @if(!empty($dataRow->header_image))
                                        <img class="img-thumbnail" src="{{url('upload/menupageinfo/'.$dataRow->header_image)}}" width="150">
                                    @endif
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Choose Lunch Menu</label>
                                    <!-- <label for="customFile">Choose Header Image</label> -->
                                    <div class="custom-file">
                                      <input type="file" class="custom-file-input"  id="download_lunch_menu" name="download_lunch_menu">
                                      <input type="hidden" value="{{$dataRow->download_lunch_menu}}" name="ex_download_lunch_menu" />
                                      <label class="custom-file-label" for="customFile">Choose Lunch Menu</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                @if(isset($dataRow->download_lunch_menu))
                                    @if(!empty($dataRow->download_lunch_menu))
                                        <a class="btn btn-primary" href="{{url('upload/menupageinfo/'.$dataRow->download_lunch_menu)}}">Download</a>
                                    @endif
                                @endif
                            </div>
                        </div>

        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Module Status</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->module_status=="Active"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="module_status_0" name="module_status" value="Active">
                          <label class="form-check-label">Active</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->module_status=="Inactive"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="module_status_1" name="module_status" value="Inactive">
                          <label class="form-check-label">Inactive</label>
                        </div>
                
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
              <a class="btn btn-danger" href="{{url('menupageinfo/edit/'.$dataRow->id)}}">
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
        