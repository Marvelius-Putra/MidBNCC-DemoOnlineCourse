<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class courseController extends Controller
{
    public function showPopularCourse(){
       $course = DB::table('courses')
                        ->where('views','>',300)
                        ->orderBy('views','desc')
                        ->get();
       return view('home', compact('course'));
   }

    public function showAllCourse(){
        $course = DB::table('courses')
                            ->orderBy('views','desc')
                            ->get();
        return view('course', compact('course'));
    }

   public function search(Request $request){
       $keyword = $request->keyword;
       $course = course::where('title', 'LIKE', "%$keyword%")->paginate(3)->appends(array('keyword' => $keyword));
       return view('course', compact('course'));
   }
}
