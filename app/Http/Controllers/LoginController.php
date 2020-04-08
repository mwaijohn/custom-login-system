<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\User;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    
    public function checklogin(Request $request){
        $this->validate($request,[
            "email" => "required|email",
            "password" => "required|alphanum|min:3"
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );

        if(Auth::attempt($user_data)){
            $user = User::where('email',$request->email)->first();
            if($user->is_admin()){
                return redirect('dashboard');
            }else{
                return redirect('success');
            }
        }else{
            return back()->with("error","wrong details");
        }
    }

    public function successlogin(){
        return view('successlogin');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
