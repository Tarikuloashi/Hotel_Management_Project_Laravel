@section('title')
DREAM HOTEL
@endsection

@extends('admin.master')

@section('content')

	
	<br/>
	<br/>
	<h3 class="text-center text-success">{{Session::get('message')}}</h3>
	<hr/>
 	<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>ID</th>
								<th>Room Name</th>
								<th>Room Description</th>
								<th>Room Rent</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($viewManageRooms as $showManageRoom)
							<tr>
								<th scope="row">{{$showManageRoom->id}}</th>
								<td>{{$showManageRoom->roomName}}</td>
								<td>{{$showManageRoom->roomDescription}}</td>
								<td>{{$showManageRoom->roomRent}}</td>
								<td>
									<a style="margin:2px;" href="{{url('/room/view/'.$showManageRoom->id)}}" class="btn btn-info")"><span class="glyphicon glyphicon-info-sign"></span>
									</a>
									<a style="margin:2px;" href="{{url('/room/edit/'.$showManageRoom->id)}}" class="btn btn-success")"><span class="glyphicon glyphicon-edit"></span>
									</a>
									<a style="margin:2px;" href="{{url('/room/delete/'.$showManageRoom->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Room Ads.')">
										<span class="glyphicon glyphicon-trash"></span>
									</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>

				</div>
			</div>
		</div>
	</div>
@endsection