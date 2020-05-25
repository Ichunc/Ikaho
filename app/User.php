<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'username', 'email', 'family_name', 'family_name_kana', 'first_name', 'first_name_kana', 'sex', 'postal', 'address', 'tel', 'birthday',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function reservations()
    {
        return $this->belongsToMany('App\Reservation', 'member_id', 'id', 'id');
    }
    public function get($member_id, $sex, $prefecture)
    {
        $member = User::query()
        //条件指定があれば絞り込み
        ->when($member_id, function ($query, $member_id) {
            return $query->where('id', $member_id);
        })
        ->when($sex, function ($query, $sex) {
            return $query->where('sex', $sex);
        })
        ->when($prefecture, function ($query, $prefecture) {
            return $query->where('prefecture', $prefecture);
        })
        ->paginate(10);
        
        return $member;
    }
    public function remove($member_id)
    {
        return $this->where('id', $member_id)->delete();
    }
}
