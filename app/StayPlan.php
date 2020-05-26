<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StayPlan extends Model
{
    protected $table = 'stay_plans';
    protected $fillable = ['hotel_id', 'plan_name', 'description', 'price', 'room_amount', 'deleted', 'deleted_date', 'note'];

    
    public function hotel()
    {
        return $this->belongsTo('App\Hotel');
    }

    public function members()
    {
        return $this->belongsToMany('App\Member', 'reservations', 'id', 'id');
    }

    public function get($plan_name, $price_min, $price_max, $room_min, $room_max)
    {
        $plan = StayPlan::with('hotel')
        ->where('deleted', 0)
        ->when($plan_name, function ($query, $plan_name) {
            return $query->where('plan_name', 'LIKE', "%$plan_name%");
        })
        // ->when([$price_min, $price_max], function ($query, $price_min, $price_max) {
        //     return $query->whereBetween('price', [$price_min, $price_max]);
        // })
        // ->when([$room_min, $room_max], function ($query, $room_min, $room_max) {
        //     return $query->whereBetween('room_amount', [$room_min, $room_max]);
        // })
        ->paginate(10);
        return $plan;
    }

    public function create(array $data)
    {
        $hotel_id = explode('.', $data['hotel_name']);
        $this->plan_name = $data['plan_name'];
        $this->hotel_id = $hotel_id[0];
        $this->description = $data['description'];
        $this->price = $data['price'];
        $this->room_amount = $data['room_amount'];
        $this->note = $data['note'];
        $this->deleted = 0;
        $this->save();
        return;
    }

    public function edit(array $data)
    {
        $this->plan_name = $data['plan_name'];
        //$this->hotel_id = $data['hotel_id'];
        $this->description = $data['description'];
        $this->price = $data['price'];
        $this->room_amount = $data['room_amount'];
        $this->note = $data['note'];
        $this->save();
        return;
    }

    public function remove()
    {
        $this->deleted = 1;
        $this->save();
        return;
    }
}