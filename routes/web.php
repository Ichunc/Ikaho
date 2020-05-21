<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/find_hotel', 'HotelController@find')->name('hotel.find');
Route::post('/find_hotel', 'HotelController@find')->name('hotel.find');

Route::get('/add_hotel', 'HotelController@addHotel')->name('hotel.add');
Route::post('/add_hotel_confirm', 'HotelController@confirmAddHotel')->name('hotel.add.confirm');
Route::post('/add_hotel_complete', 'HotelController@createHotel')->name('hotel.create');

Route::get('/edit_hotel/{id}', 'HotelController@editHotel')->name('hotel.edit');
Route::post('/edit_hotel_confirm/{id}', 'HotelController@confirmEditHotel')->name('hotel.edit.confirm');
Route::post('/edit_hotel_complete/{id}', 'HotelController@updateHotel')->name('hotel.update');

Route::get('/delete_hotel/{id}', 'HotelController@deleteHotel')->name('hotel.delete');
Route::post('/delete_hotel/{id}', 'HotelController@removeHotel')->name('hotel.remove');
