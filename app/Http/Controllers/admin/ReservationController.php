<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;


class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        // dd($reservations);
        return view('admin.pages.reservation',compact('reservations'));
    }

    public function confirm($id)
    {
        $reserve=Reservation::findorfail($id);
            $reserve->status = 0;
            $reserve->save();


        return redirect()->back();


    }
}
