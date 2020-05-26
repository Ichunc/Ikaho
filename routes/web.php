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



/*
Route::get('/', function(){
    return view('welcome');
});
*/
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');




//全ユーザ権限
  Route::get('/guest', 'MemberController@guest_index')->name('guest.index');
  Route::post('/guest/find_hotel', 'HotelController@findHotel_guest')->name('guest.hotel.find');
  Route::get('/guest/find_hotel', 'HotelController@findHotel_guest')->name('guest.hotel.find');

  Route::get('/guest/register', 'MemberController@signup')->name('guest.register');
  Route::post('/guest/register_confirm', 'MemberController@confirmInfo')->name('guest.register.confirm');
  Route::post('/guest/createMember', 'MemberController@createAccount')->name('guest.register.complete');

  Route::get('/login', 'MemberController@guest_login')->name('guest.login');
  Route::post('/login', 'MemberController@login')->name('guest.login');

  Route::get('/addmin/login', 'MemberController@addmin_login')->name('addmin.login');



//Route::group(['middleware' => ['auth', 'can:guest']], function () {
//});


//登録者以上権限
Route::group(['middleware' => ['auth', 'can:member']], function () {
  Route::get('/member', 'MemberController@member_index')->name('member.index');
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


// /logoutだと、Laravelauthのほうでエラーが出る（おそらくルーティングが被っている）
  Route::get('/logout', 'MemberController@getLogout');
  Route::post('/logout', 'MemberController@getLogout');
});


Route::group(['middleware' => ['auth', 'can:admin']], function () {
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
});
