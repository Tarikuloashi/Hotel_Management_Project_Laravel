<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','WelcomeController@index');

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard','HomeController@index');

//booking form
Route::post('/booking/save','BookingController@storeBooking');
Route::get('/booking/manage','BookingController@manageBooking');
Route::get('/booking/delete/{id}','BookingController@deleteBooking');
Route::get('/booking/deleteall','BookingController@deleteBookingAll');

//room 
Route::get('/room/add','RoomController@addRoom');
Route::post('/room/save','RoomController@saveRoom');
Route::get('/room/manage','RoomController@manageRoom');
Route::get('/room/view/{id}','RoomController@viewRoom');
Route::get('/room/edit/{id}','RoomController@editRoom');
Route::get('/room/update','RoomController@updateRoom');
Route::get('/room/delete/{id}','RoomController@deleteRoom');


