@extends('site.layout.master')
@section('title','User Dashboard')
@section('content')
<div id="contentWrapper" style="min-height: 135px;">

	<div class="sectionWrapper img-pattern">
		<div class="container">
			<div class="row">
				<aside class="col-md-3 right-sidebar">
					<ul class="sidebar_widgets">			
						<li class="widget blog-cat-w fx animated fadeInLeft" data-animate="fadeInLeft">
							<h3 class="widget-head">
								{{-- <span style="color: #09f; font-weight: bolder;" href="#">Logged : Fakhrul islam Talukder</span> --}}
							</h3>
							<div class="widget-content">
								<ul class="list list-ok alt">
									<li><a href="{{ url('user/order/paid') }}"><i class="fa fa-check"></i> Dashboard</a></li>
									<li><a href="{{ url('user/order/paid') }}"><i class="fa fa-check"></i> All Order</a></li>
									<li><a href="{{ url('user/order/paid') }}"><i class="fa fa-check"></i> Paid Order</a></li>
									<li><a href="{{ url('user/order/paid') }}"><i class="fa fa-check"></i> Pending Order</a></li>
									<li><a href="{{ url('user/order/paid') }}"><i class="fa fa-check"></i> Rejected Order</a></li>
									<li><a href="{{ url('user/profile') }}"><i class="fa fa-check"></i> Profile</a></li>
									<li><a href="{{ url('user/change-password') }}"><i class="fa fa-check"></i> Change Password</a></li>
								</ul>
							</div>
						</li>
					</ul>							
				</aside>
					<div class="col-md-9">
						<div class="blog-posts">
							<div class="post-item fx animated fadeInLeft" data-animate="fadeInLeft">
								<article class="post-content">
									<blockquote>
										<span>Welcome to The Indian Garden Norrkoping</span> 
										<span style="float: right;"><a href="#"><i class="fa fa-user"></i> Edit Profile</a></span>
									</blockquote>
									<div class="row" style="padding-top: 20px;">
										<div class="col-md-3 service-box-2 fx animated fadeInDown" data-animate="fadeInDown">
											<div class="box-2-cont">
												<i class="fa fa-shopping-cart"></i>
												<h4>All Order</h4>
												<span class="main-color">Total 340 </span>
												<a class="r-more main-color" href="#">View Order </a>
											</div>
										</div>
										<div class="col-md-3 service-box-2 fx animated fadeInDown" data-animate="fadeInDown" data-animation-delay="200" style="animation-delay: 200ms;">
											<div class="box-2-cont">
												<i class="fa fa-credit-card"></i>
												<h4>Paid Order</h4>
												<span class="main-color">Total 340 </span>
												<a class="r-more main-color" href="#">View Order </a>
											</div>
										</div>
										<div class="col-md-3 service-box-2 fx animated fadeInDown" data-animate="fadeInDown" data-animation-delay="400" style="animation-delay: 400ms;">
											<div class="box-2-cont">
												<i class="fa fa-book"></i>
												<h4>Pending Order</h4>
												<span class="main-color">Total 340 </span>
												<a class="r-more main-color" href="#">View Order </a>
											</div>
										</div>
										<div class="col-md-3 service-box-2 fx animated fadeInDown" data-animate="fadeInDown" data-animation-delay="600" style="animation-delay: 600ms;">
											<div class="box-2-cont">
												<i class="fa fa-briefcase"></i>
												<h4>Rejected Order</h4>
												<span class="main-color">Total 340 </span>
												<a class="r-more main-color" href="#">View Order </a>
											</div>
										</div>
									</div>

								</article>
							</div><!-- .post-item end -->

						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

	</div>
	@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ url('site/dashboard/css/style.css') }}">
@endsection