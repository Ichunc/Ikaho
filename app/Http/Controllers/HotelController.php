<?php

namespace App\Http\Controllers;

use App\Http\Requests\HotelRequest;
use Illuminate\Http\Request;
use App\User;
use App\Hotel;
use App\StayPlan;
use App\Reservation;
use Storage;

class HotelController extends Controller
{
    public function findHotel_admin(Request $request)
    {
        $hotel_id = $request->hotel_id;
        $hotel_code = $request->hotel_code;
        $prefecture = $request->prefecture;
        
        $hotel = new Hotel;
        $list = $hotel->get($hotel_id, $hotel_code, $prefecture);
        return view('admin.hotel.hotel_search', compact('list'));
    }

    public function findHotel_member(Request $request)
    {
        $hotel_id = $request->hotel_id;
        $hotel_code = $request->hotel_code;
        $prefecture = $request->prefecture;
        
        $hotel = new Hotel;
        $list = $hotel->get($hotel_id, $hotel_code, $prefecture);
        return view('member.hotel.hotel_search', compact('list'));
    }

    public function findHotel_guest(Request $request)
    {
        $hotel_id = $request->hotel_id;
        $hotel_code = $request->hotel_code;
        $prefecture = $request->prefecture;
        
        $hotel = new Hotel;
        $list = $hotel->get($hotel_id, $hotel_code, $prefecture);
        return view('guest.hotel_search', compact('list'));
    }

    public function addHotel()
    {
        return view('admin.hotel.hotel_add');
    }
    public function confirmAddHotel(HotelRequest $request)
    {
        $data = $request->all();
        if ($request->file('hotel_image')) {
            $file = $request->file('hotel_image');
            $file_name = $file->getClientOriginalName();

            $file->storeAs('public/img', $file_name);

            return view('admin.hotel.hotel_add_confirm', compact('data', 'file_name'));
        }
        return view('admin.hotel_add_confirm', compact('data'));
    }
    public function createHotel(Request $request)
    {
        $data = $request->all();
        $hotel = new Hotel;
        $hotel->create((array) $data);

        session()->flash('create');
        return redirect('/find_hotel');
    }
    public function editHotel($hotel_id)
    {
        $data = Hotel::find($hotel_id);
        return view('admin.hotel.hotel_edit', compact('data'));
    }

    public function confirmEditHotel(Request $request, $hotel_id)
    {
        $data = $request->all();
        if ($request->file('hotel_image')) {
            $file = $request->file('hotel_image');
            $file_name = $file->getClientOriginalName();

            $file->storeAs('public/img', $file_name);

            return view('admin.hotel.hotel_add_confirm', compact('data', 'file_name'));
        }
        return view('admin.hotel.hotel_edit_confirm', compact('data', 'hotel_id'));
    }

    public function updateHotel(Request $request)
    {
        $data = $request->all();
        $hotel = Hotel::find($request->id);
        $hotel->edit($data);
        session()->flash('update');
        return redirect('/find_hotel');
    }

    public function deleteHotel($hotel_id)
    {
        $data = Hotel::find($hotel_id);
        return view('admin.hotel.hotel_delete', compact('data'));
    }

    public function removeHotel(Request $request)
    {
        $hotel = new Hotel;
        $hotel->remove($request->id);
        session()->flash('remove');
        return redirect('/find_hotel')->with('message', '削除完了');
    }

    public function addReservation($plan_id)
    {
        $data = StayPlan::find($plan_id);
        return view('member.hotel.hotel_reserve', compact('data'));
    }
    public function confirmAddReservation(Request $request, $plan_id)
    {
        $plan = StayPlan::find($plan_id);
        $member = User::find(1);
        $data = $request->all();
        
        //宿泊日数を算出
        $checkin_date = new \DateTime($data['checkin_date']);
        $checkout_date = new \DateTIme($data['checkout_date']);
        $interval = $checkout_date->diff($checkin_date);
        $interval_format = $interval->format('%a');
        return view('member.hotel.hotel_reserve_confirm', compact('data', 'plan', 'member', 'interval_format'));
    }

    public function createReservation(Request $request, $plan_id)
    {
        $data = $request->all();
        $reservation = new Reservation;
        $reservation->create((array) $data, $plan_id);
        session()->flash('reserve');
        return redirect('member/find_hotel');
    }
}
