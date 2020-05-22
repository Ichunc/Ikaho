<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
  public $timestamps = false;
  
  protected $fillable = [
      'username', 'family_name', 'family_name_kana', 'first_name', 'first_name_kana', 'sex', 'postal', 'address', 'tel', 'email', 'birthday', 'password' 
  ];
    
  public function reservations()
  {
      return $this->belongsToMany('App\Reservation', 'member_id', 'id', 'id');
  }

}
