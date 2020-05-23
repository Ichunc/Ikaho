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

//guest
Route::get('/guest', 'MemberController@guest_index')->name('guest.index');
Route::post('/guest/find_hotel', 'HotelController@findHotel_guest')->name('guest.hotel.find');
Route::get('/guest/find_hotel', 'HotelController@findHotel_guest')->name('guest.hotel.find');

Route::get('/guest/register', 'MemberController@signup')->name('guest.register');
Route::post('/guest/register_confirm', 'MemberController@confirmInfo')->name('guest.register.confirm');
Route::post('/guest/register_complete', 'MemberController@createAccount')->name('guest.register.complete');

Route::get('/guest/login', 'MemberController@index')->name('guest.login');

//member
Route::get('/member', 'MemberController@index')->name('member.index');
Route::get('/member/find_hotel', 'HotelController@findHotel_member')->name('member.hotel.find');
Route::post('/member/find_hotel', 'HotelController@findHotel_member')->name('member.hotel.find');

Route::get('/member/edit', 'MemberController@index')->name('member.edit');
Route::post('/member/edit_confirm', 'MemberController@index')->name('member.edit.confirm');
Route::post('/member/edit_complete', 'MemberController@index')->name('member.update');

Route::get('/member/delete', 'MemberController@index')->name('member.delete');
Route::post('/member/delete', 'MemberController@index')->name('member.remove');

Route::get('/member/add_reservation/{id}', 'HotelController@addReservation')->name('reservation.add');
Route::post('/member/add_reservation_confirm/{id}', 'HotelController@confirmAddReservation')->name('reservation.add.confirm');
Route::post('/member/add_reservation_complete/{id}', 'HotelController@createReservation')->name('reservation.create');

//admin
Route::get('/find_hotel', 'HotelController@findHotel_admin')->name('hotel.find');
Route::post('/find_hotel', 'HotelController@findHotel_admin')->name('hotel.find');

Route::get('/add_hotel', 'HotelController@addHotel')->name('hotel.add');
Route::post('/add_hotel_confirm', 'HotelController@confirmAddHotel')->name('hotel.add.confirm');
Route::post('/add_hotel_complete', 'HotelController@createHotel')->name('hotel.create');

Route::get('/edit_hotel/{id}', 'HotelController@editHotel')->name('hotel.edit');
Route::post('/edit_hotel_confirm/{id}', 'HotelController@confirmEditHotel')->name('hotel.edit.confirm');
Route::post('/edit_hotel_complete/{id}', 'HotelController@updateHotel')->name('hotel.update');

Route::get('/delete_hotel/{id}', 'HotelController@deleteHotel')->name('hotel.delete');
Route::post('/delete_hotel/{id}', 'HotelController@removeHotel')->name('hotel.remove');
