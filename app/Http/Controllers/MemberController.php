<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\SignupRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{

  public function login(){
    return view('guest.login');
  }

  public function postlogin(Request $request){
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
        return view('member.member_add');
    }

    public function confirminfo(SignupRequest $request) {
        $data = $request->all();
        return view('member.member_add_confirm', compact('data'));
    }

    public function createAccount(Request $request) {
        $Users = new User;
        $form = $request->all();
        unset($form['_token']);

        //住所つなげる
        $Users->address = $request->prefectures . $request->city . $request->block;

        //nameつける
        $Users->name = $request->family_name . $request->first_name;
        //日付をｰで区切る

        $birthday = $request->year . '-' . $request->month . '-' . $request->day;
        //日付のフォーマットを変更する（月と日の前に0をつける）
        $dateformat = new \DateTime($birthday);
        $Users->birthday = $dateformat->format('Y-m-d');
        $Users->password = Hash::make($request->password);
        $Users->fill($form)->save();
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
          $Member->password         = Hash::make($request->password);
        */

        //$birthday = $_POST["year"] . '-' .  $_POST["month"] . '-' . $_POST["day"];
        return redirect('/member/index');
    }

}
