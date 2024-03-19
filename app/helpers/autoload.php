<?php

use App\Models\Booking;

function get_user_bookings($user_id){
    return Booking::where('user_id',$user_id)->count();
}
function get_user_inprogress_booking($user_id){
    return Booking::where('user_id',$user_id)->where('status','inprogress')->count();
}
function get_user_cancled_bookings($user_id){
    return Booking::where('user_id',$user_id)->where('status','cancel')->count();
}
function get_user_seccess_bookings($user_id){
    return Booking::where('user_id',$user_id)->where('status','success')->count() + Booking::where('user_id',$user_id)->where('status','finished')->count();
}

function get_user_bookings_details($user_id){
    return Booking::where('user_id',$user_id)->get();
}


function get_available_rooms($hotel_id,$total_room){
    $success_booking = Booking::where('hotel_id',$hotel_id)->where('status','success')->count();
    $calculate_availabe_room = $total_room - $success_booking;
    return $calculate_availabe_room;

}

function get_booking_requests(){
    return Booking::where('status','inprogress')->count();
}


?>


