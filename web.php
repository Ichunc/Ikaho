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

//member
Route::get('/member_delete', 'MemberController@index')->name('member.delete');
Route::post('/member_delete', 'MemberController@index')->name('member.remove');

Route::get('/member/edit', 'MemberController@index')->name('member.edit');
Route::post('/member/edit_confirm', 'MemberController@index')->name('member.edit.confirm');
Route::post('/member/edit_complete', 'MemberController@index')->name('member.update');

//admin
Route::get('/admin/member_search', 'MemberController@findMember')->name('admin.member.find');
Route::post('/admin/member_search', 'MemberController@findMember')->name('admin.member.find');

Route::get('/admin/member_edit', 'MemberController@index')->name('admin.member.edit');
Route::post('/admin/member_edit_confirm', 'MemberController@index')->name('admin.member.edit.confirm');
Route::post('/admin/member_edit_complete', 'MemberController@index')->name('admin.member.update');

Route::get('/admin/delete_member/{id}', 'MemberController@deleteMember')->name('admin.member.delete');
Route::post('/admin/delete_member/{id}', 'MemberController@removeMember')->name('admin.member.remove');
