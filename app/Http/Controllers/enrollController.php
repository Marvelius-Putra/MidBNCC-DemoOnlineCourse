<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\user;
use Illuminate\Http\Request;
use App\models\enrollment_course;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class enrollController extends Controller
{
    public function showEnroll(){
        $enrollment = enrollment_course::all();
        return view('home');
    }

    public function enroll(course $course){
        enrollment_course::create([
            'user_id' => Auth::user()->id,
            'course_id' => $course->id,
            'status' => 'active'
        ]);
        return view('home');
    }
}
