<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class loginController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    public function login (Request $request){
        $data = $request->all();
        $validator = Validator::make($data,[
            "username"=>"required",
            "password" =>"required"
        ]);

        if($validator->fails()){
            return back() -> withErrors($validator->errors());
        }

        if($request->remember){
            Cookie::queue('Remember', $request->username,5);
        }
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password], true)){
            Session::put('usersession',['username' => $request->username, 'password' => $request->password]);
            return redirect('/home');
        }
        return back() -> withErrors('Login credentials are invalid');
    }



}
