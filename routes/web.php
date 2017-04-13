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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin'], function () {

	Route::resource('customer', 'CustomerController');
	Route::resource('room', 'RoomController');

	Route::resource('price', 'RoomPriceController');
	Route::get('reserve/searchRoom/{roomType}', 'RoomReservationController@searchRoom');
	Route::resource('reserve', 'RoomReservationController');
	
	
	// Route::get('/getPrice/{id}', 'RoomPriceController@getPrice');
	
    
});


