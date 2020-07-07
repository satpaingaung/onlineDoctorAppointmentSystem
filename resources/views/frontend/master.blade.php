<!DOCTYPE html>
<html>
<head>
	<title>Online Doctor Appointment System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/bootstrap/css/bootstrap.min.css')}}">
	<script type="text/javascript" src="{{asset('frontendtemplate/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontendtemplate/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontendtemplate/fontawesome/css/all.min.css')}}">
	<script type="text/javascript" src="{{asset('custom.js')}}"></script>

</head>
<body>
	<div id="navigation" class="container-fluid sticky-top">
		<nav class="navbar navbar-expand-lg">
			<a href="#"><img src="images/logo.png" style="width: 50px;height: 50px;"></a>
			<button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mx-2 active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item mx-2">
						<a class="nav-link" href="pages/about.html">About</a>
					</li>
					<li class="nav-item mx-2">
						<a class="nav-link" href="pages/contact.html">Contact Us</a>
					</li>
					<li class="nav-item mx-2">
						<a class="nav-link" href="">Login</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
	<div class="container">
		@yield('content')
	</div>
	<div id="footer">
		<footer class="container">
			<div style="text-align: center;" class="my-3"><a href="#"><i class="fas fa-chevron-up"></i></a></div>
			<p class="text-center py-3">Copyright 2020 &copy;| Made with <i class="far fa-heart"></i></p>
		</footer>
	</div>
</body>
</html>