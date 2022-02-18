<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;

class courseController extends Controller
{
   public function showCourse(){
       $course = course::paginate(5);
       return view('course', compact('course'));
   }
}
