@extends('frontend.master')
@section('content')

<div class="form-group row">
	<label for="departmentName" class="col-lg-2 col-sm-2 col-form-label">Department</label>
	<div class="col-lg-4">

		<select class="custom-select mr-sm-2" name="department">
			<option selected>Choose Department</option>
			@foreach($departments as $row)
			<option value="{{$row->id}}">{{$row->name}}</option>
			@endforeach
		</select>
	</div>			
</div>


				<div class="doctor-list">
					<h2 class="my-3">Today Doctor List</h2>
					<div class="card-deck">
						@foreach($todaydoctor as $rows)
						<div class="card col-lg-4 card-bg-color my-3">
							<div class="d-flex my-3">
								<img src="../img/h2_banner.jpg" class="rounded-circle col-lg-4" alt="...">
								<ul class="col-lg-8">
									<li><i class="far fa-star mr-2" style="width: 50;height: 50;"></i>{{$rows->doctorName}}</li>
									<li><i class="far fa-star mr-2" style="width: 50;height: 50;"></i>{{$rows->depname}}</li>
									<li><i class="far fa-star mr-2" style="width: 50;height: 50;"></i>{{$rows->start_time}} to {{$rows->end_time}}</li>
									<li><button type="submit" class="btn btn-primary my-2">Booking</button></li>
								</ul>
							</div>
						</div>
						@endforeach

					</div>
				</div>
				<hr>
				<div class="doctor-list">
					<h2 class="my-3">All Doctor List</h2>
					<div class="card-deck">
						<input type="hidden" name="scheduleID" class="scheduleID">
						@foreach($alldoctor as $rows)
						<div class="card col-lg-4 card-bg-color my-3">
							<div class="d-flex my-3">
								<img src="../img/h2_banner.jpg" class="rounded-circle col-lg-4" alt="...">
								
								<ul class="col-lg-8">
									<li><i class="far fa-star mr-2" style="width: 50;height: 50;"></i>{{$rows->doctorName}}</li>
									<li><i class="far fa-star mr-2" style="width: 50;height: 50;"></i>{{$rows->depname}}</li>
									<li><i class="far fa-star mr-2" style="width: 50;height: 50;"></i>{{$rows->wname}}</li>
									<li><i class="far fa-star mr-2" style="width: 50;height: 50;"></i>{{$rows->start_time}} to {{$rows->end_time}}</li>
									<li>
										<form>
											
											<input type="submit" class="btn btn-primary my-2" onclick="add();"  value="booking">
										</form>
									</li>
								</ul>
							</div>
						</div>
						@endforeach
					</div>
				</div>

				<script type="text/javascript">
					
						function add()
						{
							val hiddenid = $('.scheduleID').val();
							alert(hiddenid);

						}
					
				</script>


@endsection