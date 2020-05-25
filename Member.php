<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member etends Model
{

  protected $fillable = [
    'id', 'username', 'family_name', 'family_name_kana', 'first_name', 'first_name_kana', 'sex', 'postal', 'address', 'tel', 'email', 'birthday', 'password'
  ];

  public function get($id, $family_name, $first_name)
  {
    //会員の検索
    $member = Member::with('Members')
    ->when($id, function($query, $id) {
      return $query->where('id', $id);
    })

    ->when($family_name, function($query, $family_name) {
      return $query->where('family_name', $family_name);
    })

    ->when($first_name, function($query, $first_name) {
      return $qury->where('first_name', $first_name);
    })

    ->paginate(10);
    return $member;
  }

  public function edit(array $data)
  {
    //会員の更新
    $this->username = $data['username'];
    $this->family_name = $data['family_name'];
    $this->family_name_kana = $data['family_name_kana'];
    $this->first_name = $data['first_name'];
    $this->first_name_kana = $data['first_name_kana'];
    $this->sex = $data['sex'];
    $this->postal = $data['postal'];
    $this->address = $data['address'];
    $this->tel = $data['tel'];
    $this->email = $data['email'];
    $this->birthday = $data['email'];
    $this->password = $data['password'];
    $this->update();
    return;
  }

  public function remove($id)
  {
    //会員の退会
    return $this->where('id' $$id)->delete();
  }
}
