<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Artisan;
class FrontendController extends Controller
{

    public function abcd(Request $request){
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('route:cache');
        Artisan::call('config:cache');
        Artisan::call('storage:link');
        return "route_cache";
    }
    public function home()
    {
        $all_category=DB::table('course_category')->get();
        $all_course=DB::table('regular_courses')->get();
        return view('user.pages.home')
                ->with('all_category',$all_category)
                ->with('all_course',$all_course);
    }

    public function courses()
    {
        $all_course=DB::table('regular_courses')->get();
        return view('user.pages.courses')
                ->with('all_course',$all_course);
    }

    public function course_details($id)
    {
        $find_course=DB::table('regular_courses')->where('id',$id)->first();
       
     

        if($find_course->audience_category != NULL)
        {
          $status=1;
  
        }
        else
        {
          $status=0;
        }
        return view('user.pages.course-details')
                ->with('find_course',$find_course)
                ->with('status',$status);
    }

}
