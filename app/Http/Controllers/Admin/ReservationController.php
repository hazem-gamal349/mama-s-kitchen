<?php

namespace App\Http\Controllers\Admin;

use App\Notifications\ReservationConfirmed;
use App\Reservation;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Controllers\Controller;

class ReservationController extends Controller
{
    

    public function index(){

        $reservations = Reservation::all();

        return view('admin.reservation.index', compact('reservations'));
    }

    public function status($id){
        
        $reservation = Reservation::find($id);
        $reservation->status = true;
        $reservation->save();

        Toastr::success('Reservation successfully Confirmed.','Success',["positionClass" => "toast-top-right"]);

        return redirect()->back();
    }


    public function destory($id){

        $reservation = Reservation::find($id)->delete();

        return redirect()->back();

        
    }
}
