<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use DB;

class BookingController extends Controller
{
    
    public function storeBooking(Request $request){
    	 //return $request->all();
    	 $booking= new Booking();

    	 $booking->FirstName=$request->FirstName;
    	 $booking->LastName=$request->LastName;
    	 $booking->Email=$request->Email;
    	 $booking->Category=$request->Category;
    	 $booking->InText=$request->InText;
    	 $booking->OutText=$request->OutText;
    	 $booking->save();
    	 return redirect('/')->with('message','Hotel Booking Successfully');
    }

    public function manageBooking(){
    	$manageBookinges=Booking::all();
    	return view('admin.booking.manageBooking',['viewManageBookinges'=>$manageBookinges]);
    }


    public function deleteBooking($id){
        $booking=Booking::find($id);
        $booking->delete();
        return redirect('/booking/manage')->with('message','Booking Delete Successfully');
    }

    public function deleteBookingAll(){
        $bookingById=DB::table('bookings')
            ->select('bookings.*');
         $bookingById->delete();
        return redirect('/booking/manage')->with('message','Booking Delete Successfully');
    }



}
