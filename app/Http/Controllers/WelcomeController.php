<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;

class WelcomeController extends Controller
{
    public function index(){
    	$viewRoomHomePage=Room::all();
    	return view('frontEnd.home.homeContent',['viewRoomDetails'=>$viewRoomHomePage]);
    }

    
}
