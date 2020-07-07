@extends('backend.master')



@section('content')

	<div class="row">
       	<div class="col-lg-10">
    		<h1 class="h3 mb-2 text-gray-800">Create Period </h1>
        </div>
        <div class="col-lg-2">
            <a href="{{route('periods.index')}}" class="btn btn-primary">Back</a>
		</div>
    </div>

	<div class="card">
		<div class="card-header">
			<h6>Create Period</h6>
		</div>
		<div class="card-body">
			@if ($errors->any())
				<div class="alert alert-danger">
					<ul>
						@foreach($errors->all() as $error)
							<li>{{$error}}</li>
						@endforeach
					</ul>
				</div>
			@endif
			<form method="post" action="{{route('periods.store')}}">
				@csrf
				<div class="form-group row">
					<label class="col-lg-4 col-form-label" >Period Name</label>
					<div class="col-lg-8">
						<input type="text" name="name">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-4 col-form-label" >Start Time</label>
					<div class="col-lg-8">
						<input type="time" name="start_time">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-4 col-form-label" >End Time</label>
					<div class="col-lg-8">
						<input type="time" name="end_time">
					</div>	
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
	
@endsection