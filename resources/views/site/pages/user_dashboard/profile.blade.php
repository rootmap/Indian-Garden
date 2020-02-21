<!DOCTYPE html>
<html>
<head>
	<title>User Dashboard</title>
	<link href="{{ url('site/style.css') }}" rel="stylesheet" id="bootstrap-css">
	<link href="{{ url('site/dashboard/css/style.css') }}" rel="stylesheet">
</head>
<body>
	<div id="throbber" style="display:none; min-height:120px;"></div>
	<div id="noty-holder"></div>
	<div id="wrapper">
		<!-- Navigation -->
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="http://cijulenlinea.ucr.ac.cr/dev-users/">
					<img src="http://placehold.it/200x50&text=LOGO" alt="LOGO"">
				</a>
			</div>
			<!-- Top Menu Items -->
			<ul class="nav navbar-right top-nav">
				<li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
				</a>
			</li>            
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
				<ul class="dropdown-menu">
					<li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
					<li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
					<li class="divider"></li>
					<li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
				</ul>
			</li>
		</ul>
		<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav side-nav">
				<li>
					<a href="#" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-search"></i> MENU 1 <i class="fa fa-fw fa-angle-down pull-right"></i></a>
					<ul id="submenu-1" class="collapse">
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.1</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 1.3</a></li>
					</ul>
				</li>
				<li>
					<a href="#" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  MENU 2 <i class="fa fa-fw fa-angle-down pull-right"></i></a>
					<ul id="submenu-2" class="collapse">
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
						<li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
					</ul>
				</li>
				<li>
					<a href="investigaciones/favoritas"><i class="fa fa-fw fa-user-plus"></i>  MENU 3</a>
				</li>
				<li>
					<a href="sugerencias"><i class="fa fa-fw fa-paper-plane-o"></i> MENU 4</a>
				</li>
				<li>
					<a href="faq"><i class="fa fa-fw fa fa-question-circle"></i> MENU 5</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</nav>

	<div id="page-wrapper">
		<div class="container-fluid">
			<!-- Page Heading -->
			<div class="row" id="main" >
				<div class="col-sm-12 col-md-12 well" id="content">
					<h1>Welcome Admin!</h1>
				</div>
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /#page-wrapper -->
</div><!-- /#wrapper -->

<!--  JAVASCRIPT -->
<script type="text/javascript" src="{{url('site/js/jquery.min.js')}}"></script> 
<!-- Modernizr JS --> 
<script type="text/javascript" src="{{url('site/js/modernizr-2.6.2.min.js')}}"></script>
<!--Bootatrap JS-->
<script type="text/javascript" src="{{url('site/js/bootstrap.min.js')}}"></script>
<!-- jQuery UI -->
<script type="text/javascript" src="{{url('site/js/jquery-ui.min.js')}}"></script>

<script type="text/javascript">
	$(function(){
		$('[data-toggle="tooltip"]').tooltip();
		$(".side-nav .collapse").on("hide.bs.collapse", function() {                   
			$(this).prev().find(".fa").eq(1).removeClass("fa-angle-right").addClass("fa-angle-down");
		});
		$('.side-nav .collapse').on("show.bs.collapse", function() {                        
			$(this).prev().find(".fa").eq(1).removeClass("fa-angle-down").addClass("fa-angle-right");        
		});
	})    

</script>
</body>
</html>