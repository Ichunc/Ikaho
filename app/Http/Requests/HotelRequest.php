<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
       if($this->path() == 'add_hotel_confirm'){
           return true;
       } else {
           return false;
       }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'hotel_name' => 'required',
            'hotel_postal' => 'required',
            'hotel_prefecture' => 'required',
            'hotel_city' => 'required',
            'hotel_block' => 'required',
            'hotel_tel' => 'required',
        ];
    }

    public function messages() {
        return [
            "required" => "必須項目です",
            ];
    }
}
