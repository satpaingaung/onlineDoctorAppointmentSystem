@extends('backend.master')



@section('content')

	<div class="row">
       	<div class="col-lg-10">
    		<h1 class="h3 mb-2 text-gray-800">Create Schedule </h1>
        </div>
        <div class="col-lg-2">
            <a href="{{route('schedules.index')}}" class="btn btn-primary">Back</a>
		</div>
    </div>

	<div class="card">
		<div class="card-header">
			<h6>Create Schedule</h6>
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
			<form method="post" action="{{route('schedules.store')}}">
				@csrf
				<div class="form-group row">
					<label for="departmentName" class="col-lg-4 col-sm-2 col-form-label">Choose Day</label>
					<div class="col-lg-7">
							
						<select class="custom-select mr-sm-2" name="weekday">
						    <option selected>Choose Day</option>
					        @foreach($weekdays as $row)
				        	<option value="{{$row->id}}">{{$row->name}}</option>
					        @endforeach
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="departmentName" class="col-lg-4 col-sm-2 col-form-label">Choose Period</label>
					<div class="col-lg-7">
							
						<select class="custom-select mr-sm-2" name="period">
						    <option selected>Choose Period</option>
					        @foreach($periods as $row)
				        	<option value="{{$row->id}}">{{$row->name}}</option>
					        @endforeach
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="departmentName" class="col-lg-4 col-sm-2 col-form-label">Choose Doctor</label>
					<div class="col-lg-7">
							
						<select class="custom-select mr-sm-2" name="doctor">
						    <option selected>Choose Doctor</option>
					        @foreach($doctors as $row)
				        	<option value="{{$row->id}}">{{$row->doctorName}}</option>
					        @endforeach
						</select>
					</div>
					
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</form>
		</div>
	</div>
	
@endsection