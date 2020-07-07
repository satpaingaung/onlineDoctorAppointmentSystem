@extends('backend.master')


@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
	<div class="row">
       	<div class="col-lg-10">
    		<h1 class="h3 mb-2 text-gray-800">Periods</h1>
        </div>
        <div class="col-lg-2">
            <a href="{{route('periods.create')}}" class="btn btn-primary">New Periods</a>
		</div>
    </div>

    <div class="card">
    	<div class="card-header">
    		<h6 class="font-weight-bold">Periods List</h6>
    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
    			<table class="table table-bordered" width="100%" cellspacing="0" id="dataTable">
				<thead>
					<tr>
						<th style="width:3%">No</th>
						<th style="width:50%">Name</th>
						<th style="width:10%">Start Time</th>
						<th style="width:10%">End Time</th>
						<th >Actions</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th style="width:3%">No</th>
						<th style="width:50%">Name</th>
						<th style="width:10%">Start Time</th>
						<th style="width:10%">End Time</th>
						<th >Actions</th>
					</tr>
				</tfoot>
				<tbody>
					@php $i=1; @endphp

					@foreach($periods as $row)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$row->name}}</td>
						<td>{{$row->start_time}}</td>
						<td>{{$row->end_time}}</td>
						<td>
							<div class="d-flex">
							
							<a href="{{route('periods.edit',$row->id)}}" class="btn btn-warning">Edit</a>
							
							<form action="{{route('periods.destroy',$row->id)}}" method="post" onsubmit="return confirm('Are you sure want to delete periods?')" > 
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