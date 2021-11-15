<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    public function home()
    {
        $all_category=DB::table('course_category')->get();
        $all_course=DB::table('courses')->get();
        return view('user.pages.home')
                ->with('all_category',$all_category)
                ->with('all_course',$all_course);
    }

    public function courses()
    {
        $all_course=DB::table('courses')->get();
        return view('user.pages.courses')
                ->with('all_course',$all_course);
    }

    public function course_details()
    {
        return view('user.pages.course-details');
    }

}
