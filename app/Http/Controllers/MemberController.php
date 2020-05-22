<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Http\Requests\SignupRequest;

class MemberController extends Controller
{
    public function signup() {
        return view('member.member_add');
    }

    public function confirminfo(SignupRequest $request) {
        $data = $request->all();
        return view('member.member_add_confirm', compact('data'));
    }

    public function createAccount(Request $request) {
        $Member = new Member;
        $form = $request->all();
        unset($form['_token']);

        //住所つなげる
        $Member->address = $request->prefectures . $request->city . $request->block;

        //日付をｰで区切る
        $birthday = $request->year . '-' . $request->month . '-' . $request->day;
        //日付のフォーマットを変更する（月と日の前に0をつける）
        $dateformat = new \DateTime($birthday);
        $Member->birthday = $dateformat->format('Y-m-d');

        $Member->fill($form)->save();
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
        return redirect('/member/index');
    }

}
