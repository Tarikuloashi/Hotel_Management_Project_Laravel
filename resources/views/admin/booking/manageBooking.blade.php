@section('title')
DREAM HOTEL
@endsection

@extends('admin.master')

@section('content')

	
	<hr/>
	<h3 class="text-center text-success">{{Session::get('message')}}</h3>
	<hr/>
	<table width="100%" class="table table-bordered" id="dataTables-example">
		<thead>
			<tr>
				<th>ID</th>
				<th>FirstName</th>
				<th>LastName</th>
				<th>Email</th>
				<th>Category</th>
				<th>In Ttime</th>
				<th>Out Time</th>
				<th>Action</th>
				<th><a href="{{url('/booking/deleteall')}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this booking.')">
						<span class="glyphicon glyphicon-trash"></span>
					</a></th>

			</tr>
		</thead>

		<tbody>
			@foreach($viewManageBookinges as $showManageBooking)
			<tr>
				<th>{{$showManageBooking->id}}</th>
				<td>{{$showManageBooking->FirstName}}</td>
				<td>{{$showManageBooking->LastName}}</td>
				<td>{{$showManageBooking->Email}}</td>

				<td>{{$showManageBooking->Category==1 ? 'single':'double'}}</td>
				<td>{{$showManageBooking->InText}}</td>
				<td>{{$showManageBooking->OutText}}</td>
				<td>
					<a href="{{url('/booking/delete/'.$showManageBooking->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this booking.')">
						<span class="glyphicon glyphicon-trash"></span>
					</a>
				</td>

			</tr>
			@endforeach
		</tbody>
			
	</table>

@endsection