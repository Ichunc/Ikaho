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

Route::get('/member', 'MemberController@index')->name('member.index');
Route::post('/member', 'HotelController@findMember')->name('member.hotel.find');

Route::get('/member/find_hotel', 'HotelController@findMember')->name('member.hotel.find');
Route::post('/member/find_hotel', 'HotelController@findMember')->name('member.hotel.find');
