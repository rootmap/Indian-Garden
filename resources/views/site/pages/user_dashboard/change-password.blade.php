@extends('site.layout.master')
@section('title','User Password Change')
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
				<div class="col-md-7">
					<form action="#" method="POST">
						
						<table>
							<thead>
								<tr>
									<th colspan="2" style="text-align: center;" >Update Your Password</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Old Password </td>
									<td>
										<div class="input-box">
											<input style="width: 100%;" type="password" name="old_password" class="txt-box">
										</div>
									</td>
								</tr>
								<tr class="even">
									<td>New Password</td>
									<td>
										<div class="input-box">
											<input style="width: 100%;" type="password" name="password" class="txt-box">
										</div>
									</td>
								</tr>
								<tr>
									<td>Re-Type Password</td>
									<td>

										<div class="input-box">
											<input style="width: 100%;" type="password" name="retype_password" class="txt-box">
										</div>
									</td>
								</tr>


							</tbody>
							<tfoot>
								<tr>
									<th colspan="2">
										<button type="submit" class="btn btn-success" style="padding: 10px; width: 33%">Update Password</button> 
									</th>
								</tr>
							</tfoot>
						</table>
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

</div>
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="{{ url('site/dashboard/css/style.css') }}">
<style type="text/css">
	.table-style2 th {
		border-right-color: #fff;
		border-bottom-color: #5c5c5c;
	}
	table {
		width: 100%;
		border: 1px solid #e2e2e2!important;
		border-spacing: 0;
		border-collapse: collapse;
	}
	th, td, caption {
		padding: 10px;
	}
	td, caption {
		border-right: 1px solid #e2e2e2;
		border-bottom: 1px solid #e2e2e2;
	}
	tfoot {
		background: #e9e9e9;
		font-weight: bold;
	}
	th {
		text-transform: uppercase;
		border-right: 1px solid #e2e2e2;
		background: #f5f5f5;
		border-bottom: 2px #777 solid;
	}
	tr:nth-child(even) {
		background: #f3f3f3;
	}
	input, .btn {
		padding: 5px;
		border: 1px solid #ddd;
    	border-radius: none;
	}
</style>
@endsection