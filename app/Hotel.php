<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'hotel_name', 'hotel_code', 'hotel_postal', 'hotel_address', 'hotel_tel', 'hotel_image', 'hotel_url', 'checkin_time', 'checkout_time'
    ];

    public $timestamps = false;

    public function getAll()
    {
        return $this->paginate(10);
    }
    public function get($hotel_id)
    {
        return $this->where('id', $hotel_id)->first();
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
}