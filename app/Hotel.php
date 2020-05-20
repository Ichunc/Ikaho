<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'hotel_name', 'hotel_code', 'hotel_postal', 'hotel_address', 'hotel_tel', 'hotel_image', 'hotel_url', 'checkin_time', 'checkout_time'
    ];

    public $timestamps = false;

    public function get($hotel_id, $hotel_code, $prefecture)
    {
        $query = Hotel::query();
        if(!empty($hotel_id)){
            $query->where('id', $hotel_id);
        }
        if(!empty($hotel_code)){
            $query->where('hotel_code', $hotel_code);
        }
        if(!empty($prefecture)){
            $query->where('hotel_address', 'like', '%'.$prefecture.'%');
        }
        return $query->paginate(10);
    }

    public function create(array $data)
    {
        $this->hotel_name = $data['hotel_name'];
        $this->hotel_code = $data['hotel_code'];
        $this->hotel_postal = $data['hotel_postal'];
        $this->hotel_address = $data['hotel_address'];
        $this->hotel_tel = $data['hotel_tel'];
        $this->checkin_time = $data['checkin_time'];
        $this->checkout_time = $data['checkout_time'];
        $this->save();
        return;
    }

    public function edit(array $data)
    {
        $this->hotel_name = $data['hotel_name'];
        $this->hotel_code = $data['hotel_code'];
        $this->hotel_postal = $data['hotel_postal'];
        $this->hotel_address = $data['hotel_address'];
        $this->hotel_tel = $data['hotel_tel'];
        $this->checkin_time = $data['checkin_time'];
        $this->checkout_time = $data['checkout_time'];
        $this->update();
        return;
    }

    public function remove($hotel_id)
    {
        return $this->where('id', $hotel_id)->delete();
    }
}
