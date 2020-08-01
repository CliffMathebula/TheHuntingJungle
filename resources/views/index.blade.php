@extends('layout')
@section('content')
<!-- Header -->
<header class="header2">
	<!-- Header desktop -->
	<div class="container-menu-header-v2 p-t-26">
		<div class="topbar2">
			<div class="topbar-social">
				<a href="#" class="topbar-social-item fa fa-facebook"></a>
				<a href="#" class="topbar-social-item fa fa-instagram"></a>
				<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
				<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
				<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
			</div>
			<p class="text-info">For Support Services Email: </p> &nbsp;
			<a href="#" class="logo2">
				<strong>support@thehuntingjungle.com</strong>
			</a>

			<div class="topbar-child2">
				<!--  -->
				<a href="{{url('login')}}" class="header-wrapicon1 dis-block m-l-30">
					<span class="glyhicon glyphicon-user"></span> <strong>Sign In</strong>
				</a>
				<span class="linedivide1"></span>
				<div class="header-wrapicon2 m-r-13">
					<a href="#"><strong>Cart</strong> &nbsp; <i class="glyphicon glphicon-cart"></i>&nbsp;
						<span class="header-icons-noti">0</span>
					</a>
				</div>
			</div>
		</div>
</header>
<section id="content" class="form-group">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h1 class="text-danger text-center"><small>Quick Search</small></h1>
				<div class="card">
					<div class="card-body">
						<form method="POST" action="/search">
							<input type="hidden" name="_token" value="FuANBPTJfFumPsadVibfBD1U5LXz202MN3d3dhAs">
							<div class="row align-items-center">
								<div class="col">
									<label class="text-info">Location</label>
									<div class="bo4 of-hidden size15 m-b-20">
										<select class="sizefull s-text7 p-l-22 p-r-22" id="exampleFormControlSelect1">
											<option value="Gauteng">Gauteng</option>
											<option value="Western Cape">Western Cape</option>
											<option value="Eastern Cape">Eastern Cape</option>
											<option value="Free State">Free State</option>
											<option value="KwaZulu-Natal">KwaZulu-Natal </option>
											<option value="Limpopo">Limpopo</option>
											<option value="Mpumalanga">Mpumalanga</option>
											<option value="North West">North West</option>
											<option value="Northern Cape">Northern Cape</option>
										</select>
									</div>
									<label class="text-info">Search Category</label>
									<div class="bo4 of-hidden size15 m-b-20">
										<input class="sizefull s-text7 p-l-22 p-r-22" type="search" name="search" placeholder="Careers, Phones, Jewelleries, Cars, Bikes and more" required />
									</div>
									<button class="btn btn-success btn-block">Search </button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection