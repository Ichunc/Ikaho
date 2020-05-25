<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'hotel_name', 'hotel_code', 'hotel_postal', 'hotel_prefecture','hotel_city','hotel_block', 'hotel_tel', 'hotel_image', 'hotel_url', 'checkin_time', 'checkout_time'
    ];

    public $timestamps = false;

    public function stayPlans()
    {
        return $this->hasMany('App\StayPlan');
    }

    public function hotelClassification()
    {
        return $this->belongsTo('App\HotelClassification');
    }

    public function get($hotel_id, $hotel_code, $prefecture)
    {
        $hotel = Hotel::with('stayPlans')
        //条件指定があれば絞り込み
        ->when($hotel_id, function ($query, $hotel_id) {
            return $query->where('hotel_id', $hotel_id);
        })
        ->when($hotel_code, function ($query, $hotel_code) {
            return $query->where('hotel_code', $hotel_code);
        })
        ->when($prefecture, function ($query, $prefecture) {
            return $query->where('hotel_prefecture', $prefecture);
        })
        ->paginate(10);
        
        return $hotel;
    }

    public function create(array $data)
    {
        $this->hotel_name = $data['hotel_name'];
        $this->hotel_code = $data['hotel_code'];
        $this->hotel_postal = $data['hotel_postal'];
        $this->hotel_prefecture = $data['hotel_prefecture'];
        $this->hotel_city = $data['hotel_city'];
        $this->hotel_block = $data['hotel_block'];
        $this->hotel_tel = $data['hotel_tel'];
        $this->checkin_time = $data['checkin_time'];
        $this->checkout_time = $data['checkout_time'];
        if (isset($data['hotel_image'])) {
            $this->hotel_image = $data['hotel_image'];
        }
        $this->save();
        return;
    }

    public function edit(array $data)
    {
        $this->hotel_name = $data['hotel_name'];
        $this->hotel_code = $data['hotel_code'];
        $this->hotel_postal = $data['hotel_postal'];
        $this->hotel_prefecture = $data['hotel_prefecture'];
        $this->hotel_city = $data['hotel_city'];
        $this->hotel_block = $data['hotel_block'];
        $this->hotel_tel = $data['hotel_tel'];
        $this->checkin_time = $data['checkin_time'];
        $this->checkout_time = $data['checkout_time'];
        if (isset($data['hotel_image'])) {
            $this->hotel_image = $data['hotel_image'];
        }
        $this->update();
        return;
    }

    public function remove($hotel_id)
    {
        return $this->where('id', $hotel_id)->delete();
    }
}
