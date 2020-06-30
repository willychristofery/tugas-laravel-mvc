<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('register');
    }

    public function welcome_post(Request $request){
        $firstname = $request["first"];
        $lastname = $request["last"];
        return view('welcome')->with('firstname',$firstname)->with('lastname',$lastname);
    }
}
