@section('title')
DREAM HOTEL
@endsection

@extends('admin.master')

@section('content')

<hr/>

<div class="row">
	<div class="col-lg-12">
		<h2 class="text-center text-success">{{Session::get('message')}}</h2>
		<hr/>
		<div class="well">
			<form action="{{url('/room/update')}}" method="POST" class="w3_form_post" enctype="multipart/form-data">
				
				{{ csrf_field() }}
				
				<div class="form-group">
		            <label class="text-primary col-sm-4" >Room Name</label>
		            <input type="text" class="form-control" value="{{$editRoomById->roomName}}" name="roomName" required="">
		            <input type="hidden" class="form-control" value="{{$editRoomById->id}}" name="roomid" required="">
		            <p class="help-block">Example Single room or double room.</p>
		        </div>

		        <div class="form-group">
		            <label class="text-primary">Room Description</label>
		            <textarea class="form-control" rows="8" name="roomDescription" required="">{{$editRoomById->roomDescription}}</textarea>
		        </div>

				<div class="form-group input-group">
		            <span class="input-group-addon">$</span>
		            <input type="number" class="form-control" value="{{$editRoomById->roomRent}}" name="roomRent" min="1" required="">
		            <span class="input-group-addon">.00</span>
		        </div>

		        <div class="form-group">
		            <label class="text-primary">Room Photo </label>
		            <input type="file" name="roomImage" required="">
		            <img src="{{asset($editRoomById->roomImage)}}" alt="{{$editRoomById->roomName}}" height="300px" width="300px">
		        </div>

				<button type="submit" name="btn" class=" btn-primary btn-lg btn-block">Add Room</button>		
			</form>
		</div>
	</div>	
</div>
@endsection