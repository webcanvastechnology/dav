<?php

namespace App\Http\Controllers;

use Artisan;
use DB;
use Illuminate\Http\Request;
use Toastr;

class FrontendController extends Controller
{

    public function abcd(Request $request)
    {
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('route:cache');
        Artisan::call('config:cache');
        Artisan::call('storage:link');
        return "route_cache";
    }

    public function apply_code()
    {
        $input = request()->all();
        $find_code = DB::table('coupon')->where('code', $input['code'])->first();
        $find_course = DB::table('regular_courses')->where('id', $input['course_id'])->first();
        $find_course_fees = DB::table('events_regular')->where('application_id', $input['reg_id'])->first();

        $find_reg = DB::table('coupon_used')->where('reg_id', $input['reg_id'])->first();

        if ($find_code) {

            $dis = (int) (($find_course_fees->fees) - (($find_code->discount) * ($find_course_fees->fees)) / 100);

            if ($find_reg) {

                $reg_id = $input['reg_id'];
                $cupon_code = $input['code'];
                DB::table('coupon_used')->where('reg_id', $reg_id)->update(['cupon_code' => $cupon_code]);

            } else {
                $data = array();
                $data['reg_id'] = $input['reg_id'];
                $data['cupon_code'] = $input['code'];

                DB::table('coupon_used')->insert($data);

            }

            return response()->json(['status' => true, 'success' => 'Promo Code Applied', 'dis' => $dis]);
        } else {

            $dis = $find_course_fees->fees;

            return response()->json(['status' => false, 'success' => ' Wrong code.', 'dis' => $dis]);
        }

    }

    public function home()
    {
        $all_category = DB::table('course_category')->get();
        $all_course = DB::table('regular_courses')->get();
        $all_news = DB::table('tbl_news')->get();
        $all_testimonial = DB::table('tbl_testimonial')->get();
        return view('user.pages.home')
            ->with('all_category', $all_category)
            ->with('all_course', $all_course)
            ->with('all_news', $all_news)
            ->with('all_testimonial', $all_testimonial);
    }

    public function courses()
    {

        $all_course = DB::table('regular_courses')->get();
        $all_grade = DB::table('grades')->get();
        $all_foundation = DB::table('cs_foundation')->get();
        $all_discover = DB::table('cs_discover')->get();
        $all_expediion = DB::table('cs_expediion')->get();
        $all_tools = DB::table('tools')->get();
        return view('user.pages.courses')
            ->with('all_course', $all_course)
            ->with('all_grade', $all_grade)
            ->with('all_foundation', $all_foundation)
            ->with('all_expediion', $all_expediion)
            ->with('all_discover', $all_discover)
            ->with('all_tools', $all_tools);

    }

    public function course_details($id)
    {
        $find_course = DB::table('regular_courses')->where('id', $id)->first();

        if ($find_course->audience_category != null) {
            $status = 1;

        } else {
            $status = 0;
        }
        return view('user.pages.course-details')
            ->with('find_course', $find_course)
            ->with('status', $status);
    }

    public function curriculum()
    {

        return view('user.pages.curriculam');

    }
    public function contact()
    {

        return view('user.pages.contact');

    }

    public function contactPost(Request $request)
    {

        $this->validate($request, array(

            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',

        ));

        $data = array();

        $data['name'] = $request->name;

        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        $data['created_at'] = date('Y-m-d H:i:s');

        DB::table('contacts')->insert($data);

        Toastr::success('Thank you. Your message has been submitted, we will get back to you soon ', 'Success');
        return redirect()->route('contact');

    }

    public function get_filter(Request $request)
    {
        $gr = $request->grade;
        $fd = $request->foundation;
        $dis = $request->discover;
        $ex = $request->expediion;
        $tools = $request->tools;
        
       // dd($gr);

        DB::enableQueryLog();
        $query = DB::table('regular_courses');

// $query->where( 'post_title' ,  $request->post_title);
        if (!empty($gr)) {

            for ($i = 0; $i <= count($gr) - 1; $i++) {
                $query->orWhereRaw("find_in_set('{$gr[$i]}' , grade)");
            }
        }
        if (!empty($dis)) {

          for ($i = 0; $i <= count($dis) - 1; $i++) {
              $query->orWhereRaw("find_in_set('{$dis[$i]}' , cs_discover)");
          }
      }

      if (!empty($fd)) {

        for ($i = 0; $i <= count($fd) - 1; $i++) {
            $query->orWhereRaw("find_in_set('{$fd[$i]}' , cs_foundation)");
        }
      }
      if (!empty($ex)) {

        for ($i = 0; $i <= count($ex) - 1; $i++) {
            $query->orWhereRaw("find_in_set('{$ex[$i]}' , cs_expediion)");
        }
      }
      if (!empty($tools)) {

        for ($i = 0; $i <= count($tools) - 1; $i++) {
            $query->orWhereRaw("find_in_set('{$tools[$i]}' , cs_tools)");
        }
      }

        $results = $query->get();

// and then you can get query log

       // dd(DB::getQueryLog());

       return view('user.pages.filter_courses')
       ->with('all_course',$results);

    }

}
