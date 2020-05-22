<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{

  public function deleteMember()
  {
    return view('member.member_delete_confirm');
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

  public function updataMember(Request $request)
  {
    $data = $request->all();
    $member = Member::find($request->id);
    $member->edit($data);
    unset($form['_token_']);
    $member->fill($form)->save();
    return redirect('/show_member');
  }

  public function removeMember()
  {
    return view('');
  }

}
