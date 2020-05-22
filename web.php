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


Route::get('/member_delete_confirm/{id}', 'MemberController@delete_member');
Route::post('/member_delete_confirm/{id}', 'MemberController@delete_member');

Route::get('/member_edit/{id}', 'MemberController@edit_member');
Route::post('/member_edit_confirm/{id}', 'MemberController@edit_member_confirm')
