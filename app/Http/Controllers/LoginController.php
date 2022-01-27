<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postLogin(Request $request){
        if(Auth::attempt($request->only('name' ,'password'))){
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }
    public function Logout(Request $request){
        Auth::logout();
        return redirect('/login');
        }
        

    
}

