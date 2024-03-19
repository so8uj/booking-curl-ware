<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function registration(Request $request){
        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users',
            'username'=>'required|unique:users',
            'password'=>'required|min:6',
            'confirm_password'=>'required|min:6|same:password',
        ]);

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('user_created','Your Registration Done!');
    }
    public function login(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:6',
        ]);

        if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
            return redirect('/admin/dashboard');
        }else{
            return back()->with('invalid_login','Wrong Credentials!');
        }
    }


    public function logout(){

        Session::flush();
        Auth::logout();
        return redirect('/');
    }

}
