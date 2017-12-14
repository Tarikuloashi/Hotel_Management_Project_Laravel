@section('title')
DREAM HOTEL
@endsection

@extends('admin.master')

@section('content')


<br>
<br>
<hr>
	
		<div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    
	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
		<tr>
			<th>Room Id</th>
			<td>{{$room->id}}</td>

		</tr>
		<tr>
			<th>Room Name</th>
			<td>{{$room->roomName}}</td>

		</tr><tr>
			<th>Room Description</th>
			<td>{{$room->roomDescription}}</td>

		</tr><tr>
			<th>Room Rent</th>
				<td>
					<div class="glyphicon glyphicon-usd" style="margin:10px; color: #fefbd8;" ></div>{{$room->roomRent}}</td>
			
		</tr><tr>
			<th>Room Image</th>
			<th><img src="{{asset($room->roomImage)}}" alt="{{$room->roomName}}" height="300px" width="300px"></th>
		</tr>

	</table>
<br>
		<br>
	</div>
</div>
</div>
</div>
@endsection