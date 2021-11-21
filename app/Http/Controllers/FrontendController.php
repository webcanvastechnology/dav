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

    public function apply_code(){
      $input = request()->all();
      $find_code=DB::table('coupon')->where('code',$input['code'])->first();
      $find_course=DB::table('regular_courses')->where('id',$input['course_id'])->first();
      $find_course_fees=DB::table('events_regular')->where('application_id',$input['reg_id'])->first();
  
      $find_reg=DB::table('coupon_used')->where('reg_id',$input['reg_id'])->first();
  
      if($find_code){
  
        $dis=(int)(($find_course_fees->fees)-(($find_code->discount)*($find_course_fees->fees))/100);
        
  
        if($find_reg){
  
           $reg_id=$input['reg_id'];
        $cupon_code=$input['code'];
        DB::table('coupon_used')->where('reg_id',$reg_id)->update(['cupon_code' => $cupon_code]);
  
       
  
      }
      else{
            $data=array();
        $data['reg_id']=$input['reg_id'];
        $data['cupon_code']=$input['code'];
  
           DB::table('coupon_used')->insert($data);
       
      }
  
  
      return response()->json(['status' => true,'success'=>'Promo Code Applied','dis'=>$dis]);
    }
      else{
  
        $dis=$find_course_fees->fees;
  
        return response()->json(['status' => false,'success'=>' Wrong code.','dis'=>$dis]);
      }
  
  
    }

    public function home()
    {
        $all_category=DB::table('course_category')->get();
        $all_course=DB::table('regular_courses')->get();
        $all_news=DB::table('tbl_news')->get();
        $all_testimonial=DB::table('tbl_testimonial')->get();
        return view('user.pages.home')
                ->with('all_category',$all_category)
                ->with('all_course',$all_course)
                ->with('all_news',$all_news)
                ->with('all_testimonial',$all_testimonial);
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
