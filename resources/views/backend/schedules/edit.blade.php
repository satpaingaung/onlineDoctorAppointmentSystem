@extends('backend.master')

@section('content')

	<div class="row">
       	<div class="col-lg-10">
    		<h1 class="h3 mb-2 text-gray-800">Edit Form For Schedule </h1>
        </div>
        <div class="col-lg-2">
            <a href="{{route('schedules.index')}}" class="btn btn-primary">Back</a>
		</div>
    </div>

	<div class="card">
		<div class="card-header">
			<h6>Edit Schedule</h6>
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
			<form method="post" action="{{route('schedules.update',$schedule->id)}}" enctype="multipart/form-data">
				@csrf
				@method('PUT')
				<div class="form-group row">
					<label for="weekday" class="col-lg-4 col-sm-2 col-form-label">Choose Days</label>
					<div class="col-lg-8 col-sm-10">
						<select class="custom-select mr-sm-2" name="weekday">
						    <option selected>Choose Day</option>
					        @foreach($weekdays as $row)
					        @if($row->id==$schedule->day_id)
				        			<option selected value="{{$row->id}}">{{$row->name}}</option>
				        			@else
				        			<option value="{{$row->id}}">{{$row->name}}</option>
				        	@endif
				        	
					        @endforeach
						</select>		
						
					</div>
				</div>
				
				<div class="form-group row">
					<label for="period" class="col-lg-4 col-sm-2 col-form-label">Choose Period</label>
					<div class="col-lg-8 col-sm-10">
						<select class="custom-select mr-sm-2" name="weekday">
						    <option selected>Choose Period</option>
					        @foreach($periods as $row)
					        @if($row->id==$schedule->period_id)
				        			<option selected value="{{$row->id}}">{{$row->name}}</option>
				        			@else
				        			<option value="{{$row->id}}">{{$row->name}}</option>
				        	@endif
				        	
					        @endforeach
						</select>	
						
					</div>
				</div>

				<div class="form-group row">
					<label for="doctor" class="col-lg-4 col-sm-2 col-form-label">Choose Doctor</label>
					<div class="col-lg-8 col-sm-10">
							<select class="custom-select mr-sm-2" name="weekday">
						    <option selected>Choose Doctor</option>
					        @foreach($doctors as $row)
					        @if($row->id==$schedule->doctor_id)
				        			<option selected value="{{$row->id}}">{{$row->doctorName}}</option>
				        			@else
				        			<option value="{{$row->id}}">{{$row->doctorName}}</option>
				        	@endif
				        	
					        @endforeach
						</select>
						
					</div>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</form>
		</div>
	</div>
	
@endsection