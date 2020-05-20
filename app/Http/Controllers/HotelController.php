<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;

class HotelController extends Controller
{
    public function find() 
    {
        $hotel = new Hotel;
        $list = $hotel->getAll();
        return view('admin.hotel_search', compact('list'));
    }
    public function addHotel() 
    {
        return view('admin.hotel_add');
    }
    public function confirmAddHotel(Request $request) 
    {
        $data = $request->all();
        return view('admin.hotel_add_confirm', compact('data'));
    }
    public function createHotel(Request $request)
    {
        $data = $request->all();
        $hotel = new Hotel;
        $hotel->create((array) $data);
        return redirect('/add_hotel');
    }
    public function editHotel($hotel_id) 
    {
        $data = Hotel::find($hotel_id);
        return view('admin.hotel_edit', compact('data'));
    }

    public function confirmEditHotel(Request $request, $hotel_id) 
    {
        $data = $request->all();
        return view('admin.hotel_edit_confirm', compact('data', 'hotel_id'));
    }

    public function updateHotel(Request $request)
    {
        $data = $request->all();
        $hotel = Hotel::find($request->id);
        $hotel->edit($data);
        return redirect('/find_hotel');
    }

    public function deleteHotel() 
    {
        return view('admin.hotel_delete');
    }

    public function removeHotel() 
    {
        return view('');
    }

}