<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function showProfile(){
        return view('user');
    }

    public function show($id){
        $profile = User::find($id);
        return view('user',compact('profile'));
    }
}
