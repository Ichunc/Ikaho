<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public $timestamps = false;
    
    public function create(array $data, $plan_id)
    {
        $this->member_id = 1; //ログイン機能が完成したら修正
        $this->plan_id = $plan_id;
        $this->reserve_date = $data['reserve_date'];
        $this->checkin_date = $data['checkin_date'];
        $this->checkout_date = $data['checkout_date'];
        $this->room = $data['room_amount'];
        $this->save();
        return;
    }

}