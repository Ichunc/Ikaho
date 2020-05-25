<?php

namespace App\Http\Controllers;

use APP\Http\Request\MemberRequest;
use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{

  public function findMember(Request $request)
  {
    //管理者の会員検索
    $id = $request->id;
    $family_name = $request->family_name;
    $first_name = $request->first_name;
    $list = $member->get($id, $family_name, $first_name);
    return view('member.member_search', ['input' => '']);
  }

  public function deleteMember()
  {
    //会員の退会
    return view('member.member_delete_confirm', compact('data'));
  }

  public function deleteMember_admin()
  {
    //管理者の会員削除
    return view('admin.member_delete_confirm_byadmin', compact('data'));
  }

  public function editMember(Request $request)
  {
    $data = Member::find($request->id)
    return view('member.member_edit', ['form' => $data]);
  }

  public function confirmEditMember(Request $request, $id)
  {
    $data = $request->all();
    return view('member.member_edit_confirm', conpact('data', 'id'));
  }

  public function editMember_admin(REquest $request
  {
    $data = Member::find($request->id)
    return view('admin.member_edit_confirm.byadmin', ['form' => $data]);
  }

  public funtion confirmEditMember_admin(Request $request, $idea)
  {
    $data = $request->all();
    return view('admin.member_edit_confirm.byadmin', conpact('data', 'id'));
  }

  public function updataMember(Request $request)
  {
    $data = $request->all();
    $member = Member::find($request->id);
    $member->edit($data);
    unset($form['_token_']);
    $member->fill($form)->save();
    return view('/show_member');
  }

  public function removeMember()
  {
    return view('');
  }

}
