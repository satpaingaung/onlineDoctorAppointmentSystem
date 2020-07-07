@extends('backend.master')


@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
	<div class="row">
       	<div class="col-lg-10">
    		<h1 class="h3 mb-2 text-gray-800">Schedules Lists</h1>
        </div>
        <div class="col-lg-2">
            <a href="{{route('schedules.create')}}" class="btn btn-primary">New Schedules Lists</a>
		</div>
    </div>

    <div class="card">
    	<div class="card-header">
    		<h6 class="font-weight-bold">Schedules Lists</h6>
    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
    			<table class="table table-bordered" width="100%" cellspacing="0" id="dataTable">
				<thead>
					<tr>
						<th style="width:3%">No</th>
						<th style="width:30%">Days</th>
						<th style="width:10%">Doctor Name</th>
						<th style="width:10%">Department</th>
						<th style="width:10%">Start time</th>
						<th style="width:10%">End Time</th>
						<th >Actions</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th style="width:3%">No</th>
						<th style="width:30%">Days</th>
						<th style="width:10%">Doctor Name</th>
						<th style="width:10%">Department</th>
						<th style="width:10%">Start time</th>
						<th style="width:10%">End Time</th>
						<th >Actions</th>
					</tr>
				</tfoot>
				<tbody>
					@php $i=1; @endphp

					@foreach($schedules as $row)
					<tr>
						<td>{{$i++}}</td>
						@foreach($weekdays as $weekday)
							@if($weekday->id==$row->day_id)
								<td>{{$weekday->name}}</td>
							@endif
						@endforeach

						@foreach($doctors as $doctor)
							@if($doctor->id==$row->doctor_id)
								<td>{{$doctor->doctorName}}</td>
							@endif
						@endforeach

						@foreach($doctors as $doctor)
							@if($doctor->id==$row->doctor_id)
								@foreach($departments as $department)
									@if($doctor->department_id==$department->id)
										<td>{{$department->name}}</td>
									@endif
								@endforeach	
	        				@endif
        				@endforeach
						
						@foreach($periods as $period)
							@if($period->id==$row->period_id)
								<td>{{$period->start_time}}</td>
								<td>{{$period->end_time}}</td>
							@endif
						@endforeach

						
						<td>
							<div class="d-flex">
							
							<a href="{{route('schedules.edit',$row->id)}}" class="btn btn-warning">Edit</a>
							
							<form action="{{route('schedules.destroy',$row->id)}}" method="post" onsubmit="return confirm('Are you sure want to delete schedule?')" > 
								@csrf
								@method('DELETE')
								<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
								
							</form>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>	
    		</div>
    		
    	</div>
    </div>
@endsection


@section('script')

	<script src="{{asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

	<script src="{{asset('backendtemplate/js/demo/datatables-demo.js')}}"></script>
@endsection