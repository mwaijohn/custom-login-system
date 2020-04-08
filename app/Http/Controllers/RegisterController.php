<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function create(){
        return view('registration.create');
    }

    public function store(Request $request){
        
        $this->validate(
            $request,[
            "name" => "required",
            "email" => "required|email",
            "password" => 'required|confirmed',
            "cover_image" => "nullable|image|max:1999"
            ]
        );

        //handle image
        if(request()->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            //get just file name
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

            //GET JUST EXTENTION
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore = $filename."_".time().".".$extension;
            $path = $request->file('cover_image')->storeAs('public/cover_image',$fileNameToStore);


        }else{
            $fileNameToStore = "noimage.jpg";
        }

        //$user = User::create(request(['name','email','password']));
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->cover_image = $fileNameToStore;

        $user->save();


        auth()->login($user);

        return redirect()->to('/success');
    }
}
