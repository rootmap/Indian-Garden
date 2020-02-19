<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="{{ url('admin/dist/img/AdminLTELogo.png') }}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-igloo"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-steam-symbol"></i>
              <p>Site Setting</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book-open"></i>
              <p>Our History</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-utensils"></i>
              <p>Menu</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>Events</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>Gallery</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope-open"></i>
              <p>Reservation & Contact</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    {{-- ============================================ --}}
    <div class="side-bar-bottom">
       <ul class="list-unstyled">
          <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="" data-original-title="Edit Profile"><a href="#"><i class="fas fa-cog"></i></a></li>
          <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="" data-original-title="Change Password"><a href="#"><i class="fas fa-key"></i></a></li>
          <a href="#">
          </a>
          <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="" data-original-title="Lockscreen"><a href="#"></a><a href="#"><i class="fas fa-unlock"></i></a></li>
          <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="" data-original-title="Logout">
             <a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i>
             </a>
             <form id="logout-form" action="" method="POST" style="display: none;">
                
             </form>
          </li>
       </ul>
    </div>
  </aside>

  <style type="text/css">
    .side-bar-bottom {
      width: 100%;
      height: 35px;
      background-color: #343a40;
      position: -webkit-sticky;
      position: sticky;
      bottom: 0px;
      margin-top: 93%;
      color: #cccccc;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      border-top: 2px solid #444a50;
      padding-top: 25px;
      /*-webkit-box-shadow: 0px 2px 5px 5px black;
      box-shadow: 0px 2px 5px 5px black;*/
  }
  .side-bar-bottom ul li a i{
    color: #fff;
    padding: 10px;
  }
  </style>