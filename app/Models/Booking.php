<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = ['status'];
    function bookingUser(){
        return $this->hasOne(User::class,'id','user_id');
    }
    function bookingHotel(){
        return $this->hasOne(Hotels::class,'id','hotel_id');
    }

}
