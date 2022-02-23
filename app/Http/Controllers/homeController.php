<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function showDetail($id)
    {
        $course = course::find($id);
        return view('detail', compact('course'));
    }
}
