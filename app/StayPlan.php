<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StayPlan extends Model
{
    //
    protected $table = 'stay_plans';
    protected $fillable = ['hotel_id', 'plan_name', 'description', 'price', 'room_amount', 'deleted', 'deleted_date', 'note'];

    public function getAll(){
        return $this->paginate(10);
    }

    public function get($plan_id){
        return $this->where('id', $plan_id)->first();
    }

}
