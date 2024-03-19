<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.pages.dashboard');
    }

    public function bookings(){
        return view('admin.pages.bookings',[
            'bookings' => Booking::latest()->get()
        ]);
    }
    public function booking_request(){
        return view('admin.pages.booking_request',[
            'booking_requests' => Booking::where('status','inprogress')->get()
        ]);
    }
    public function booking_request_action($action){
        $expolde_action = explode('-',$action);
        Booking::find($expolde_action[1])->update(['status'=>$expolde_action[0]]);
        return back();
    }
}
