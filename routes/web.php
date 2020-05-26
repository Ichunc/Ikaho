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
    return view('layout.sample');
});
//ゲストトップページ
Route::get('/guest', 'MemberController@guest_index')->name('guest.index');
//ゲスト宿検索
Route::post('/guest/find_hotel', 'HotelController@findHotel_guest')->name('guest.hotel.find');
Route::get('/guest/find_hotel', 'HotelController@findHotel_guest')->name('guest.hotel.find');
//会員登録
Route::get('/guest/register', 'MemberController@signup')->name('guest.register');
Route::post('/guest/register_confirm', 'MemberController@confirmInfo')->name('guest.register.confirm');
Route::post('/guest/register_complete', 'MemberController@createAccount')->name('guest.register.complete');
//ログイン
Route::get('/guest/login', 'MemberController@login')->name('guest.login');
Route::post('/guest/login', 'MemberController@postLogin')->name('guest.login.complete');
//会員トップページ
Route::get('/member', 'MemberController@index')->name('member.index');
//会員宿検索
Route::get('/member/find_hotel', 'HotelController@findHotel_member')->name('member.hotel.find');
Route::post('/member/find_hotel', 'HotelController@findHotel_member')->name('member.hotel.find');
//会員情報変更
Route::get('/member/edit', 'MemberController@editMember')->name('member.edit');
Route::post('/member/edit_confirm', 'MemberController@confirmEditMember')->name('member.edit.confirm');
Route::post('/member/edit_complete', 'MemberController@index')->name('member.update');
//会員退会
Route::get('/member/delete', 'MemberController@deleteMember')->name('member.delete');
Route::post('/member/delete', 'MemberController@removeMember')->name('member.remove');
//宿予約
Route::get('/member/add_reservation/{id}', 'HotelController@addReservation')->name('reservation.add');
Route::post('/member/add_reservation_confirm/{id}', 'HotelController@confirmAddReservation')->name('reservation.add.confirm');
Route::post('/member/add_reservation_complete/{id}', 'HotelController@createReservation')->name('reservation.create');
//宿検索
Route::get('/find_hotel', 'HotelController@findHotel_admin')->name('hotel.find');
Route::post('/find_hotel', 'HotelController@findHotel_admin')->name('hotel.find');
//宿登録
Route::get('/add_hotel', 'HotelController@addHotel')->name('hotel.add');
Route::post('/add_hotel_confirm', 'HotelController@confirmAddHotel')->name('hotel.add.confirm');
Route::post('/add_hotel_complete', 'HotelController@createHotel')->name('hotel.create');
//宿更新
Route::get('/edit_hotel/{id}', 'HotelController@editHotel')->name('hotel.edit');
Route::post('/edit_hotel_confirm/{id}', 'HotelController@confirmEditHotel')->name('hotel.edit.confirm');
Route::post('/edit_hotel_complete/{id}', 'HotelController@updateHotel')->name('hotel.update');
//宿削除
Route::get('/delete_hotel/{id}', 'HotelController@deleteHotel')->name('hotel.delete');
Route::post('/delete_hotel/{id}', 'HotelController@removeHotel')->name('hotel.remove');
//会員検索
Route::get('/admin/find_member', 'MemberController@getMember')->name('admin.member.find');
Route::post('/admin/find_member', 'MemberController@getMember')->name('admin.member.find');
//会員情報更新
Route::get('/admin/edit_member/{id}', 'MemberController@editMember_admin')->name('admin.member.edit');
Route::post('/admin/edit_member/{id}', 'MemberController@confirmEditMember_admin')->name('admin.member.edit.confirm');
Route::post('/admin/edit_member/confirm/{id}', 'MemberController@updateMember_admin')->name('admin.member.edit.complete');
//会員情報削除
Route::get('/admin/delete_member/{id}', 'MemberController@deleteMember_admin')->name('admin.member.delete');
Route::post('/admin/delete_member/{id}', 'MemberController@removeMember_admin')->name('admin.member.remove');
//プラン検索
Route::get('/find_plan', 'HotelController@findStayPlan')->name('plan.find');
Route::post('/find_plan', 'HotelController@findStayPlan')->name('plan.find');
//プラン登録
Route::get('/add_plan', 'HotelController@addStayPlan')->name('plan.add');
Route::post('/add_plan_confirm', 'HotelController@confirmAddStayPlan')->name('plan.add.confirm');
Route::post('/add_plan_complete', 'HotelController@createStayPlan')->name('plan.create');
//プラン情報更新
Route::get('/edit_plan/{id}', 'HotelController@editStayPlan')->name('plan.edit');
Route::post('/edit_plan_confirm/{id}', 'HotelController@confirmEditStayPlan')->name('plan.edit.confirm');
Route::post('/edit_plan_complete/{id}', 'HotelController@updateStayPlan')->name('plan.update');
//プラン情報削除
Route::get('/delete_plan/{id}', 'HotelController@deleteStayPlan')->name('plan.delete');
Route::post('/delete_plan/{id}', 'HotelController@removeStayPlan')->name('plan.remove');
