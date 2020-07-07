@extends('backend.master')

@section('content')

	<div class="row">
       	<div class="col-lg-10">
    		<h1 class="h3 mb-2 text-gray-800">Edit Form For Doctor </h1>
        </div>
        <div class="col-lg-2">
            <a href="{{route('doctors.index')}}" class="btn btn-primary">Back</a>
		</div>
    </div>

	<div class="card">
		<div class="card-header">
			<h6>Edit Doctor</h6>
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
			<form method="post" action="{{route('doctors.update',$doctor->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="form-group row">
					<label class="col-lg-4 col-form-label" >Doctor Name</label>
					<div class="col-lg-8">
						<input type="text" name="doctorName" value="{{$doctor->doctorName}}">
					</div>
				</div>

				<div class="form-group row">
					<label for="departmentName" class="col-lg-4 col-sm-2 col-form-label">Department</label>
					<div class="col-lg-8 col-sm-10">
							
						<select class="custom-select mr-sm-2" name="department">
						    <option selected>Choose Department</option>
					        @foreach($departments as $row)
		         		        	@if($row->id==$doctor->department_id)
				        			<option selected value="{{$row->id}}">{{$row->name}}</option>
				        			@else
				        			<option value="{{$row->id}}">{{$row->name}}</option>
				        			@endif
					        	@endforeach
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-4 col-form-label" >Doctor Phone Number</label>
					<div class="col-lg-8">
						<input type="number" name="phoneNumber" value="{{$doctor->phoneNumber}}">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-4 col-form-label" >Doctor Number</label>
					<div class="col-lg-8">
						<input type="text" name="doctorNumber" value="{{$doctor->doctorNumber}}">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-lg-4 col-form-label">Photo</label>
					<div class="col-lg-8">
						<nav>
  							<div class="nav nav-tabs" id="nav-tab" role="tablist">
	    						<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Old Photo</a>
	    						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New Photo</a>
    						</div>
						</nav>
						<div class="tab-content" id="nav-tabContent">
				            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
						  	
							  	<img src="{{asset($doctor->doctorPhoto)}}" class="img-fluid w-25">
							  	<input type="hidden" name="oldphoto" value="{{$doctor->doctorPhoto}}">
						    </div>
						    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						      	<input type="file" name="doctorPhoto" accept="image/*" >				
							</div>

						</div>
						
					</div>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</form>
		</div>
	</div>
	
@endsection