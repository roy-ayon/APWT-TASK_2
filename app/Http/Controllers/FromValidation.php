<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FromValidation extends Controller
{
    public function loginpage()
    {
        return view('loginpage');
    }
    public function submit(Request $request){
        $validate = $request->validate([
                'user_name'=>'required|string',
                'name'=>'required|string',
                'email'=>'required|email',
                'password'=>'required|min:6',
                'phone'=>'required|tel',
                'message'=>'required'
            ],
            [
                'email.required'=>'Please put your email',
                'password.min'=>'Password length not match'
            ]
        );


        return "OK";      
    }
    public function registration()
    {
        return view('registrationpage');
    }
    
    public function contact()
    {
        return view('contactpage');
    }
    public function send(Request $request){
        $validate = $request->validate([
                'user_name'=>'required|string',
                'name'=>'required|string',
                'email'=>'required|email',
                'password'=>'required|min:6',
                'phone'=>'required|tel',
                'message'=>'required'
            ],
            [
                'email.required'=>'Please put your email',
                'password.min'=>'Password length not match'
            ]
        );


        return "OK";      
    }
    
}
