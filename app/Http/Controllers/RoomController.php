<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use DB;

class RoomController extends Controller
{
    public function addRoom(){
    	return view('admin.room.addRoom');
    }

    public function saveRoom(Request $request){
    	//return $request->all();
    	// for server validation
    	$this->validate($request,[
    		'roomName'=>'required',
    		'roomDescription'=>'required',
    		'roomRent'=>'required',
    		'roomImage'=>'required',	
    	]);
		// for server validation
		
		// Image Handle
    	$roomImage=$request->file('roomImage');
    	$name=$roomImage->getClientOriginalName();
    	$uploadPath='public/roomImage/';
    	$roomImage->move($uploadPath,$name);
    	$imageUrl=$uploadPath.$name;
    	//Image Handle
    	
    	// store data to database
    	$room=new Room();

    	$room->roomName=$request->roomName;
    	$room->roomDescription=$request->roomDescription;
    	$room->roomRent=$request->roomRent;
    	$room->roomImage=$imageUrl;
    	$room->save();

    	return redirect('/room/add')->with('message','Room Info Add Successfully');
    }

    public function manageRoom(){
    	$manageRooms=Room::all();
    	return view('admin.room.manageRoom',['viewManageRooms'=>$manageRooms]);
    }

    public function viewRoom($id){
    	$roomById=DB::table('rooms')
    		->select('rooms.*')
    		->where('rooms.id',$id)
    		->first();
    	return view ('admin.room.viewRoom',['room'=>$roomById]);
    }


     public function editRoom($id){
        $roomById=Room::where('id',$id)->first();
     
        return view('admin.room.editRoom')
                ->with ('editRoomById',$roomById);
   
    }
    
    public function deleteRoom($id){
        $room=Room::find($id);
        $room->delete();
        return redirect('/room/manage')->with('message','Room Delete Successfully');
    }

}
 