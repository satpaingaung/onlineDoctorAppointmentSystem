@extends('backend.master')


@section('style')
	<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
	<div class="row">
       	<div class="col-lg-10">
    		<h1 class="h3 mb-2 text-gray-800">Departments</h1>
        </div>
        <div class="col-lg-2">
            <a href="{{route('departments.create')}}" class="btn btn-primary">New Department</a>
		</div>
    </div>

    <div class="card">
    	<div class="card-header">
    		<h6 class="font-weight-bold">Departments List</h6>
    	</div>
    	<div class="card-body">
    		<div class="table-responsive">
    			<table class="table table-bordered" width="100%" cellspacing="0" id="dataTable">
				<thead>
					<tr>
						<th style="width:3%">No</th>
						<th style="width:77%">Name</th>
						<th >Actions</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Actions</th>
					</tr>
				</tfoot>
				<tbody>
					@php $i=1; @endphp

					@foreach($departments as $row)
					<tr>
						<td>{{$i++}}</td>
						<td>{{$row->name}}</td>
						<td>
							<div class="d-flex">
							
							<a href="{{route('departments.edit',$row->id)}}" class="btn btn-warning">Edit</a>
							
							<form action="{{route('departments.destroy',$row->id)}}" method="post" onsubmit="return confirm('Are you sure want to delete department?')" > 
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