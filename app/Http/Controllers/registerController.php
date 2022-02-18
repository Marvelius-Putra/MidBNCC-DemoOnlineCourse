<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class registerController extends Controller
{
    public function registerPage(){
        return view('register');
    }

    public function register(Request $request){
        $data = $request->all();
        $validator = Validator::make($data,[
            "fullname"=>"required|unique:users|min:10|max:45",
            "username"=>"required|unique:users|min:3|max:15",
            "password"=>"required|min:8|max:20|alpha_num",
            "password-confirm"=>"required|same:password",
            "email"=>"required|email|unique:users",
            "address"=>"required",
            "age" => "required|integer",
            "phone"=>"required",
            "birthdate"=>"required",
        ]);

        if($validator->fails()){
            return back() -> withErrors($validator->errors());
        }
        $user = new User();
        $user->fullname = $request->fullname;
        $user->username = $request->username;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->address = $request->address;
        $user->age = $request->age;
        $user->phone = $request->phone;
        $user->birthdate = $request->birthdate;
        $user->save();
        return redirect('/');
    }
}
