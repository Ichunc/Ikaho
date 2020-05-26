<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class MemberController extends Controller
{
    public function guest_index(){
      if(Auth::check()){
          return redirect('/member');
        }
          return view('guest.guest');
    }

    public function guest_login(){
      if(Auth::check()){
          return redirect('/member');
        }
          return view('guest.login');
    }

    public function login(Request $request){
      $username = $request->username;
      $password = $request->password;
      if (Auth::attempt(['username' => $username,
                         'password' => $password])){
            return redirect('member');
      } else {
            return view('guest.login');
      }

    }

    public function signup() {
        return view('guest.member_add');
    }

    public function confirminfo(Request $request) {
        $data = $request->all();
        return view('guest.member_add_confirm', compact('data'));
    }

    public function createAccount(Request $request) {
        $User = new User;
        $form = $request->all();
        unset($form['_token']);

        //nameを一応作成
        $User->name = $request->family_name . $request->first_name;
        //住所つなげる
        $User->address = $request->prefectures . $request->city . $request->block;
        //日付をｰで区切る
        $birthday = $request->year . '-' . $request->month . '-' . $request->day;
        //日付のフォーマットを変更する（月と日の前に0をつける）
        $dateformat = new \DateTime($birthday);
        $User->birthday = $dateformat->format('Y-m-d');
        //パスワードをハッシュ化する
        $User->password = Hash::make($request->password);
        $User->fill($form)->save();
        /*
          $Member->username         = $request->username;
          $Member->family_name      = $request->family_name;
          $Member->family_name_kana = $request->family_name_kana;
          $Member->first_name       = $request->first_name;
          $Member->first_name_kana  = $request->first_name_kana;
          $Member->postal           = $request->postal;
          $Member->address          = $request->address;
          $Member->tel              = $request->tel;
          $Member->email            = $request->email;
          $Member->birthday         = $request->birthday;
          $Member->password         = $request->password;
        */
        //$birthday = $_POST["year"] . '-' .  $_POST["month"] . '-' . $_POST["day"];
        return redirect('/guest/login');
    }
    public function member_index(){
      $user = Auth::user();
      return view('member.index', $user);
    }

    public function getLogout(){
      Auth::logout();
      return redirect('/guest');
    }






/*
    //admin
    public function admin_login(Request $request){
      $admin_name = $request->admin_name;
      $password = $request->password;
      if (Auth::attempt(['admin_name' => $admin_name,
                         'password' => $password])){
            return redirect('admin');
      } else {
            return view('admin.login');
      }
    }

    public function admin_login_view(){
      return view('admin.login');
    }

    public function admin_signup(){
      return view('admin.admin_add');
    }
    public function admin_confirmInfo(Request $request) {
        $data = $request->all();
        return view('admin.admin_add_confirm', compact('data'));
    }

    public function admin_createAccount(Request $request) {
        $Admin = new Admin;
        $form = $request->all();
        unset($form['_token']);
        $Admin->password = Hash::make($request->password);
        $Admin->fill($form)->save();
        return redirect('/admin/login');
    }
*/




}
