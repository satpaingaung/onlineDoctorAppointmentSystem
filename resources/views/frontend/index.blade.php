@extends('frontend.master')
@section('content')
<div id="carousel" class="carousel slide my-3" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel" data-slide-to="0" class="active"></li>
		<li data-target="#carousel" data-slide-to="1"></li>
		<li data-target="#carousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item  active">
			<img src="img/h3_banner.jpg" class="d-block img-fluid w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h2>Hospital Name</h2>
				<p><i class="fas fa-phone-alt"></i>+95977777</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/h_banner.jpg" class="d-block img-fluid w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h2>First slide label</h2>
				<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="img/h2_banner.jpg" class="d-block img-fluid w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h2>Second slide label</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			</div>
		</div>
	</div>
	<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>

<div id="hospital-details" class="my-5">
	<div class="row">
		<div class="col-lg-6">
			<img src="img/h5_banner.jpg" class="img-fluid">
		</div>
		<div class="col-lg-6">
			<h3>Hospital Name</h3>
			<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			<a href="pages/about.html"><button class="btn btn-primary rounded">More Detail</button></a>
		</div>
	</div>
</div>

<hr>

<div id="card-section">

	<section class="row card-deck">	

		<div class="card border-0 shadow rounded col-lg-6 card-bg-color  my-3">
			<a href="">
				<div class="card-body">
					<h5 class="card-title">Special title treatment</h5>
					<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
					<a href="#" class="btn btn-primary">Go somewhere</a>
				</div>
			</a>
		</div>

		<div class="card border-0 shadow rounded col-lg-6 card-bg-color  my-3">
			<a href="{{route('checkdoctor')}}">
				<div class="card-body">
					<h5 class="card-title">Doctor List</h5>
					<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a href="{{route('checkdoctor')}}" class="btn btn-primary">To Check Doctor List</a>
				</div>
			</a>
		</div>
	</section>

	<hr>

	<section class="row">

		<h3 class="my-3">Health General Knowledges</h3>
		<div class="card-deck">
			<div class="card border-0 shadow rounded col-lg-6 card-bg-color my-3">
				<a href="">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</a>
			</div>

			<div class="card border-0 shadow rounded col-lg-6 card-bg-color my-3">
				<a href="">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</a>
			</div>
			<div class="card border-0 shadow rounded col-lg-6 card-bg-color my-3">
				<a href="">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</a>
			</div>

			<div class="card border-0 shadow rounded col-lg-6 card-bg-color my-3">
				<a href="">
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</a>
			</div>
		</div>
	</section>

</div>
@endsection