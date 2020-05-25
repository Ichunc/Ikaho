<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelRequest;
use Illuminate\Http\Request;
use App\Member;
use App\Hotel;
use App\StayPlan;
use App\Reservation;

class HotelController extends Controller
{
    public function findHotel_admin(Request $request) 
    {
        $hotel_id = $request->hotel_id;
        $hotel_code = $request->hotel_code;
        $prefecture = $request->prefectures;
        
        $hotel = new Hotel;
        $list = $hotel->get($hotel_id, $hotel_code, $prefecture);
        return view('admin.hotel_search', compact('list'));
    }

    public function findHotel_member(Request $request) 
    {
        $hotel_id = $request->hotel_id;
        $hotel_code = $request->hotel_code;
        $prefecture = $request->prefectures;
        
        $hotel = new Hotel;
        $list = $hotel->get($hotel_id, $hotel_code, $prefecture);
        return view('member.hotel_search', compact('list'));
    }

    public function addHotel() 
    {
        return view('admin.hotel_add');
    }
    public function confirmAddHotel(HotelRequest $request) 
    {
        $data = $request->all();
        return view('admin.hotel_add_confirm', compact('data'));
    }
    public function createHotel(Request $request)
    {
        $data = $request->all();
        $hotel = new Hotel;
        $hotel->create((array) $data);
        return redirect('/find_hotel');
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

    public function deleteHotel($hotel_id) 
    {
        $data = Hotel::find($hotel_id);
        return view('admin.hotel_delete', compact('data'));
    }

    public function removeHotel(Request $request) 
    {
        $hotel = new Hotel;
        $hotel->remove($request->id);
        return redirect('/find_hotel');
    }

    public function addReservation($plan_id)
    {
        $data = StayPlan::find($plan_id);
        return view('member.hotel_reserve', compact('data'));
    }
    public function confirmAddReservation(Request $request, $plan_id)
    {
        $plan = StayPlan::find($plan_id);
        $member = Member::find(1);
        $data = $request->all();
        return view('member.hotel_reserve_confirm', compact('data', 'plan', 'member'));
    }

    public function createReservation(Request $request, $plan_id)
    {
        $data = $request->all();
        $reservation = new Reservation;
        $reservation->create((array) $data, $plan_id);
        return redirect('member/find_hotel');
    }
}
