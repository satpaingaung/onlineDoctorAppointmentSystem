@extends('backend.master')



@section('content')

	<div class="row">
       	<div class="col-lg-10">
    		<h1 class="h3 mb-2 text-gray-800">Create Doctor </h1>
        </div>
        <div class="col-lg-2">
            <a href="{{route('doctors.index')}}" class="btn btn-primary">Back</a>
		</div>
    </div>

	<div class="card">
		<div class="card-header">
			<h6>Create Doctor</h6>
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
			<form method="post" action="{{route('doctors.store')}}" enctype="multipart/form-data">
				@csrf
				<div class="form-group row">
					<label class="col-lg-4 col-form-label" >Doctor Name</label>
					<div class="col-lg-8">
						<input type="text" name="doctorName">
					</div>
				</div>

				<div class="form-group row">
					<label for="departmentName" class="col-lg-4 col-sm-2 col-form-label">Department</label>
					<div class="col-lg-7">
							
						<select class="custom-select mr-sm-2" name="department">
						    <option selected>Choose Department</option>
					        @foreach($departments as $row)
				        	<option value="{{$row->id}}">{{$row->name}}</option>
					        @endforeach
						</select>
					</div>
					<!-- <div class="col-lg-1">
						<a href="{{route('departments.create')}}" class="btn btn-primary"><i class="fas fa-plus"></i></a>
					</div> -->
				</div>
				<div class="form-group row">
					<label class="col-lg-4 col-form-label" >Doctor Phone Number</label>
					<div class="col-lg-8">
						<input type="number" name="phoneNumber">
					</div>
				</div>
				<div class="form-group row">
					<label class="col-lg-4 col-form-label" >Doctor Number</label>
					<div class="col-lg-8">
						<input type="text" name="doctorNumber">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-lg-4 col-form-label">Photo</label>
					<div class="col-lg-8">
						<input  type="file" name="doctorPhoto" accept="image/*">
					</div>
				</div>
			
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
	
@endsection