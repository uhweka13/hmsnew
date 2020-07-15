<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class LoginController extends Controller
{
    //
    public function login_control(Request $request)
    {
        if (Auth::attempt([
           'email'=>$request->email,
           'password'=>$request->password
       ]))
         {
            $slug = User::where('email',$request->email)->first();
            
            
            if ($slug->role === "admin") {
                return redirect('/hospital-index');
            }
            else if ($slug->role === "doctor") {
                return redirect('/doctor-index');
            }else if ($slug->role === "patient") {
                return redirect('/patient-index');
            }
            
        }
        
       return back()->with('error')->with('error','Email/Password invalid');

   
}
}