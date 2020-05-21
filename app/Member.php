<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
  protected $fillable = [
      'username', 'family_name', 'family_name_kana', 'first_name', 'first_name_kana', 'sex', 'postal', 'address', 'tel', 'email', 'birthday', 'password' 
  ];

}
