<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Hotels;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        return view('frontend.pages.index',[
            'hotels'=> Hotels::latest()->get()
        ]);
    }
    public function login(){
        return view('frontend.pages.login');
    }
    public function registration(){
        return view('frontend.pages.registration');
    }

    public function booking($name){
        $hotel_name = Str::title(str_replace('-', ' ', $name));
        $hoter_serach = Hotels::where('name',$hotel_name)->count();
        if($hoter_serach > 0){
            return view('frontend.pages.booking',[
                'hotel_detail' => Hotels::where('name',$hotel_name)->first()
            ]);
        }else{
            return redirect('/');
        }
    }

    public function post_booking(Request $request, $hotel_id){
        Booking::insert([
            'hotel_id'=> $hotel_id,
            'user_id'=> Auth::id(),
            'arrival_date'=> $request->arrival_date,
            'departure_date'=> $request->departure_date,
            'room_type'=> $request->room_type,
            'person_numbers'=> $request->person_numbers,
        ]);
        return redirect('/user-dashboard')->with('booking_done','booking_done');
    }

}
