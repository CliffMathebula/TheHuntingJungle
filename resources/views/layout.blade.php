<!DOCTYPE html>
<html lang="en">
  <head>
    <title>The Hunting Jungle</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/util.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.min.css">
  </head>
<body>
	<header>
		<!-- Navigation bar -->
		<nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
			<!-- Brand -->
			<a class="navbar-brand" href="{{url('/')}}">
				The Hunting Jungle
			</a>

			<!-- Toggler/collapsibe Button -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>

			<!-- Navbar links -->
			<div class="collapse navbar-collapse navbar-center" id="collapsibleNavbar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">Career portal</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Classifieds</strong></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Domains & Hosting</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Software Development</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Business Marketing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Business Registration</a>
					</li>
				</ul>
			</div>
		</nav>

	</header>
	<!-- alert danger -->
	<div class="flex-c-m size22 bg0 s-text21 pos-relative alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		Promote your business! 95% Discount Only R5 Per day .
		<a href="{{url('register')}}" class="s-text22 hov6 p-l-5">
			Sign up now
		</a>
	</div>

  @yield('content')

</body>

</html>