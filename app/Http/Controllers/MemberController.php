<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\MemberRequest;
use App\User;
use App\Hotel;

class MemberController extends Controller
{
    public function guest_index()
    {
        if (Auth::check()) {
            return redirect('/member');
        }
        return view('guest.index');
    }
    
    public function member_index()
    {
        //$user = Auth::user();
        //return view('member.index', $user);
        return view('member.index');
    }
    
    public function guest_login()
    {
        if (Auth::check()) {
            return redirect('/member');
        }
        return view('guest.login');
    }

    public function login(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        if (Auth::attempt(['username' => $username,
                         'password' => $password])) {
            return redirect('member');
        } else {
            return view('guest.login');
        }
    }
    
    public function getLogout()
    {
        Auth::logout();
        return redirect('/guest');
    }

    public function signup()
    {
        return view('guest.member_add');
    }
    public function confirmInfo(Request $request)
    {
        $data = $request->all();
        return view('guest.member_add_confirm', compact('data'));
    }

    public function createAccount(Request $request)
    {
        $Users = new User;
        $form = $request->all();
        unset($form['_token']);

        $Users->address = $request->prefectures . $request->city . $request->block;

        $Users->name = $request->family_name . $request->first_name;

        $birthday = $request->year . '-' . $request->month . '-' . $request->day;
     
        $dateformat = new \DateTime($birthday);
        $Users->birthday = $dateformat->format('Y-m-d');
        $Users->password = Hash::make($request->password);
        $Users->fill($form)->save();
        
        return redirect('/member/index');
    }

    public function editMember(Request $request)
    {
        $data = User::find(2);
        $birthday = explode('-', $data->birthday);
        return view('member.info.member_edit', compact('data', 'birthday'));
    }

    public function confirmEditMember(MemberRequest $request)
    {
        $data = $request->all();
        return view('member.info.member_edit_confirm', compact('data'));
    }

    public function updateMember(MemberRequest $request)
    {
        $data = $request->all();
        $member = User::find($request->id);
        $member->edit($data);
        unset($form['_token_']);
        $member->fill($form)->save();
        session()->flash('update_member');
        return redirect('/show_member');
    }

    public function deleteMember()
    {
        return view('member.info.member_delete');
    }
    public function removeMember()
    {
        return redirect('');
    }
    //editMember_admin未実装

    public function getMember(Request $request)
    {
        $member_id = $request->member_id;
        $username = $request->username;
        $family_name_kana = $request->family_name_kana;
        $first_name_kana = $request->first_name_kana;
        $sex = $request->sex;
        $prefecture = $request->prefecture;
        
        $user = new User;
        $list = $user->get($member_id, $username, $sex, $prefecture, $family_name_kana, $first_name_kana);
        return view('admin.member.member_search', compact('list'));
    }

    public function deleteMember_admin(Request $request)
    {
        $data = User::find(3);
        return view('admin.member.member_delete', compact('data'));
    }
    public function removeMember_admin(Request $request)
    {
        $member = new User;
        $member->remove($request->id);
        session()->flash('delete_admin');
        return redirect('admin/find_member');
    }
}
