@extends('layout')
@section('content')
<!-- Header -->
<header class="header2">
	<!-- Header desktop -->
	<div class="container-menu-header-v2 p-t-26">
		<div class="topbar2">
			<div class="topbar-social">
				<a href="#" class="topbar-social-item fa fa-facebook-official"></a>
				<a href="#" class="topbar-social-item fa fa-instagram"></a>
				<a href="#" class="topbar-social-item fa fa-whatsapp"></a>
				<a href="#" class="topbar-social-item fa fa-linkedin-square"></a>
				<a href="#" class="topbar-social-item fa fa-google-plus-square"></a>
			</div>
			<p class="text-info">Need help? Email : </p> &nbsp;
			<a href="#" class="logo2">
				support@thehuntingjungle.com
			</a>
			<div class="topbar-child2">
				<!--  -->
				<a href="{{url('login')}}" class="header-wrapicon1 dis-block ">
					<span class="glyhicon glyphicon-user"></span>Sign In
				</a>
				<span class="linedivide1"></span>
				<a href="{{url('register')}}" class="header-wrapicon1 dis-block m-l-10">
					<span class="glyhicon glyphicon-user"></span>Register
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
<section id="content" class="form-group mt-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<h1 class="text-danger text-center"><small>Quick Search</small></h1>
				<div class="card  bg-light">
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
									<!-- category section -->
									<label class="text-info">Category</label>
									<div class="bo4 of-hidden size15 m-b-20">
										<select class="sizefull s-text7 p-l-22 p-r-22" id="exampleFormControlSelect1">
											<option value="Classifieds">Classifieds</option>
											<option value="Careers">Careers</option>
											<option value="Education">Education</option>
										</select>
									</div>
									<label class="text-info">Search title</label>
									<div class="bo4 of-hidden size15 m-b-20">
										<input class="sizefull s-text7 p-l-22 p-r-22" type="search" name="search" placeholder="type to search...." required />
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
<section class="bookmeeting">
<!-- Calendly inline widget begin -->

<div class="calendly-inline-widget" style="min-width:320px;height:580px;" data-auto-load="false">
<br /><br />
<h1 class="text-dark text-center">Book a Meeting with us</h1>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
 <script>
 Calendly.initInlineWidget({
 url: 'https://calendly.com/climathe1/60min'
 });
 </script>
</div>
<!-- Calendly inline widget end --></section>
@endsection