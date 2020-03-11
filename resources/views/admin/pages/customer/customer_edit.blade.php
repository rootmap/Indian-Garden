
@extends("admin.layout.master")
@section("title","Edit Customer")
@section("content")
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Customer</h1>
      </div>
      <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('customer/list')}}">Datatable </a></li>
              <li class="breadcrumb-item"><a href="{{url('customer/create')}}">Create New </a></li>
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
            <h3 class="card-title">Edit / Modify Customer</h3>
            <div class="card-tools">
              <ul class="pagination pagination-sm float-right">
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('customer/create')}}"> 
                        Create 
                        <i class="fas fa-plus"></i>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link bg-primary" href="{{url('customer/list')}}"> 
                        Data 
                        <i class="fas fa-table"></i>
                    </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('customer/export/pdf')}}">
                    <i class="fas fa-file-pdf" data-toggle="tooltip" data-html="true"title="Pdf"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link  bg-primary" target="_blank" href="{{url('customer/export/excel')}}">
                    <i class="fas fa-file-excel" data-toggle="tooltip" data-html="true"title="Excel"></i>
                  </a>
                </li>
              </ul>
            </div>
        </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('customer/update/'.$dataRow->id)}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          
            <div class="card-body">
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->name)){
                            ?>
                            value="{{$dataRow->name}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Customer Name" id="name" name="name">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="email_address">Email Address</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->email_address)){
                            ?>
                            value="{{$dataRow->email_address}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Email Address" id="email_address" name="email_address">
                      </div>
                    </div>
                </div>
                
        <div class="row">
            <div class="col-sm-12">
              <!-- radio -->
              <div class="form-group">
              <label>Choose Gender</label>
        
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->gander=="Male"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="gander_0" name="gander" value="Male">
                          <label class="form-check-label">Male</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->gander=="Female"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="gander_1" name="gander" value="Female">
                          <label class="form-check-label">Female</label>
                        </div>
                
                        <div class="form-check">
                            <input class="form-check-input" type="radio"  
                                <?php 
                                if($dataRow->gander=="Other"){
                                    ?>
                                    checked="checked" 
                                    <?php 
                                }
                                ?>
                          id="gander_2" name="gander" value="Other">
                          <label class="form-check-label">Other</label>
                        </div>
                
                    </div>
                </div>
            </div>
            
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="date_of_birth">Date Of Birth</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->date_of_birth)){
                            ?>
                            value="{{$dataRow->date_of_birth}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Type Date of Birth" id="date_of_birth" name="date_of_birth">
                      </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" 
                            
                        <?php 
                        if(isset($dataRow->password)){
                            ?>
                            value="{{$dataRow->password}}" 
                            <?php 
                        }
                        ?>
                        
                        class="form-control" placeholder="Enter Password" id="password" name="password">
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
              <a class="btn btn-danger" href="{{url('customer/edit/'.$dataRow->id)}}">
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