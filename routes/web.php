<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\HotelsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// ===============================================
// Frontend Routes
// ===============================================

Route::controller(FrontendController::class)->group(function(){
    Route::get('/','index');
    Route::get('/login','login')->name('login');
    Route::get('/registration','registration');
});

Route::middleware('auth')->group(function(){
    Route::get('/booking/{name}',[FrontendController::class,'booking']);
    Route::post('/post-booking/{hotel_id}',[FrontendController::class,'post_booking']);

    // User Profiles
    Route::get('/user-dashboard',[UserController::class,'dashboard']);
});

// ===============================================
// Auth Routes
// ===============================================
Route::controller(AuthController::class)->group(function(){
    Route::post('/post-registration','registration');
    Route::post('/post-login','login');
    Route::get('/logout','logout');
});

// ===============================================
// Admin Routes
// ===============================================
Route::controller(AdminController::class)->prefix('/admin')->middleware(['auth','checkuserrole'])->group(function(){
    Route::get('/dashboard','dashboard');
    Route::get('/bookings','bookings');
    Route::get('/booking-request','booking_request');
    Route::get('/booking-request/{action}','booking_request_action');

});
Route::prefix('/admin')->middleware(['auth','checkuserrole'])->group(function(){
    Route::resource('/hotels',HotelsController::class);
});
