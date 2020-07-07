@extends('backend.master')


@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
	<div class="row">
       	<div class="col-lg-10">
    		<h1 class="h3 mb-2 text-gray-800">Doctors List</h1>
        </div>
        <div class="col-lg-2">
            <a href="{{route('doctors.create')}}" class="btn btn-primary">New Doctor</a>
		</div>
    </div>

    <div class="card">
    	<div class="card-header">
    		<h6 class="font-weight-bold">Doctors List</h6>
    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
    			<table class="table table-bordered" width="100%" cellspacing="0" id="dataTable">
				<thead>
					<tr>
						<th style="width:3%">No</th>
						<th style="width:50%">Name</th>
						<th style="width:10%">Department</th>
						<th >Actions</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th style="width:3%">No</th>
						<th style="width:50%">Name</th>
						<th style="width:10%">Department</th>
						<th >Actions</th>
					</tr>
				</tfoot>
				<tbody>
					@php $i=1; @endphp

					@foreach($doctors as $row)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$row->doctorName}}</td>
						@foreach($departments as $department)
							@if($department->id==$row->department_id)
								<td>{{$department->name}}</td>
							@endif
						@endforeach
						<td>
							<div class="d-flex">
							<a href="{{route('doctors.show',$row->id)}}" class="btn btn-warning">Detail</a>

							<a href="{{route('doctors.edit',$row->id)}}" class="btn btn-warning">Edit</a>
							
							<form action="{{route('doctors.destroy',$row->id)}}" method="post" onsubmit="return confirm('Are you sure want to delete doctor?')" > 
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