<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use Toastr;

class SuperAdminController extends Controller
{
    public function upload(Request $request)

    {

        if($request->hasFile('upload')) {

            $originName = $request->file('upload')->getClientOriginalName();

            $fileName = pathinfo($originName, PATHINFO_FILENAME);

            $extension = $request->file('upload')->getClientOriginalExtension();

            $fileName = $fileName.'_'.time().'.'.$extension;

        

            $request->file('upload')->move(public_path('ckeditor_images'), $fileName);

   

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');

            $url = asset('public/ckeditor_images/'.$fileName); 

            $msg = 'Image uploaded successfully'; 

            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

               

            @header('Content-type: text/html; charset=utf-8'); 

            echo $response;

        }

    }
   public function index()
    {
        $this->superadmin_auth_check();

        $count_visitor=DB::table('visitor')->distinct('ip')->count('ip');
        $count_user=DB::table('events')->count();

        $dashboard_home=view('admin.pages.dashboard_home')
                        ->with('count_visitor',$count_visitor)
                        ->with('count_user',$count_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$dashboard_home);
    }



public function superadmin_auth_check()
{
    session_start();
    $admin_id=Session::get('admin_id');
    if($admin_id ==NULL)
    {
        return redirect::to('admin-panel')->send();
    }
}



public function regular_paid_user()
{
     $this->superadmin_auth_check();

        

        $all_user = DB::table('events_regular')
            
            ->join('regular_courses','events_regular.course_id','=','regular_courses.id')
            
            ->select('events_regular.*','regular_courses.course_title')
            ->orderBy('events_regular.id', 'desc')
            ->get();

        $manage_user=view('admin.pages.regular_paid_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}

public function paid_user()
{
     $this->superadmin_auth_check();

        

        $all_user = DB::table('events')
            ->join('payments', 'events.application_id', '=', 'payments.reg_id')
            ->join('courses','events.course_id','=','courses.id')
            ->select('events.*', 'payments.*','courses.course_title')
             ->orderBy('payments.created_at', 'desc')
            ->get();

        $manage_user=view('admin.pages.paid_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}


public function unpaid_user()
{
     $this->superadmin_auth_check();

        

        $all_user = DB::table('events')
            ->join('courses','events.course_id','=','courses.id')
           ->where('events.status',0)
           ->orderBy('events.id', 'desc')
           ->select('events.*','courses.course_title')
            ->get();

        $manage_user=view('admin.pages.unpaid_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}


public function contact_list()
{
     $this->superadmin_auth_check();

        

        $all_user = DB::table('contacts')
           
            ->get();

        $manage_user=view('admin.pages.contact_list')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}

public function visitor_list()
{
     $this->superadmin_auth_check();

        

        $all_user = DB::table('visitor')
           
            ->get();

        $manage_user=view('admin.pages.visitor_list')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}


public function add_coupon()
{
     $this->superadmin_auth_check();

        

        
        $addcoupon=view('admin.pages.add_coupon');
                       
         return view('admin.admin-master')
                ->with('admin_main_content',$addcoupon);
}

public function postCoupon(Request $request){

        $this->validate($request,array(
            'code' => 'required',
            
            'discount' => 'required',   
            
            
            
             
        ));


        $data=array();
      
        

        
        $data['code'] = $request->code;
        $data['discount'] = $request->discount;
       
        DB::table('coupon')
                ->insert($data);
         
    
        
               

        Toastr::success(' Coupon added Successfull !!  ', 'Success');
       return redirect::to('add-coupon');

     
 }

public function manage_coupon()
{
     $this->superadmin_auth_check();

        

        $all_coupon = DB::table('coupon')
           
            ->get();

        $manage_coupon=view('admin.pages.coupon_list')
                        ->with('all_coupon',$all_coupon);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_coupon);
}




public function delete_coupon($id)
{
    $this->superadmin_auth_check();
    
    DB::table('coupon')
            ->where('id',$id)
            ->delete();
        return redirect::to('/manage-coupon');
}



public function add_special_course()
{
     $this->superadmin_auth_check();

        

        
        $addcourse=view('admin.pages.add_special_courses');
                       
         return view('admin.admin-master')
                ->with('admin_main_content',$addcourse);
}

public function postSpecialCourse(Request $request){

        $this->validate($request,array(
            'title' => 'required',
            
               
            'price' => 'required',
            
            'details' => 'required',
            
            
             
        ));


        $data=array();
      
        
        $images = $request->file('course_image');
       
        if($request->hasFile('course_image'))
         {
             foreach ($images as $image) {
 
         $imageName = $image->getClientOriginalName();
 
         $image->move(public_path('special_course_image'),$imageName);
         $data['course_image'] = $imageName;
             }
            }
        
        
        $data['title'] = $request->title;
       
        $data['price'] = $request->price;
       

       
        $data['details'] = $request->details;
        $data['short_desc'] = $request->short_desc;
        $data['home_page_desc'] = $request->home_page_desc;
        $data['home_page']=$request->home_page;
       
        $data['status']=1;
       
         
        DB::table('special_course')
                ->insert($data);
         

        
               

        Toastr::success(' Course added special Successfull !!  ', 'Success');
       return redirect::to('add-special-course');

     
 }


 public function manage_course_special()
{
     $this->superadmin_auth_check();

        

        $all_course = DB::table('special_course')
           
            ->get();
            $all_menu = DB::table('special_course')->orderBy('sort_id','asc')
           
            ->get();

        $manage_course=view('admin.pages.course_special_list')
                        ->with('all_course',$all_course)
                        ->with('all_menu',$all_menu);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_course);
}

public function updateOrder(Request $request){
    $this->superadmin_auth_check();
    if($request->has('ids')){
        $arr = explode(',',$request->input('ids'));
       
        //exit();
        foreach($arr as $sortOrder => $id){
            $menu = DB::table('special_course')->where('id',$id)->first();
           
            
            $menu->sort_id = $sortOrder;
            DB::table('special_course')->where('id',$menu->id)
            ->update(['sort_id' => $sortOrder]);
            
        }
        return ['success'=>true,'message'=>'Updated'];
    }
}

public function edit_course_special($id)
{
     $this->superadmin_auth_check();

        

        $all_course = DB::table('special_course')->where('id',$id)
           
            ->first();

        $manage_course=view('admin.pages.edit_courses_special')
                        ->with('all_course',$all_course);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_course);
}

public function updateCourseSpecial(Request $request){

        

    $course_id = $request->course_id;
            $data=array();
      
        
            $images = $request->file('course_image');
       
            if($request->hasFile('course_image'))
             {
                 foreach ($images as $image) {
     
             $imageName = $image->getClientOriginalName();
     
             $image->move(public_path('special_course_image'),$imageName);
            
            $data['course_image'] = $imageName;
              
              
                 }
             }
         
     $data['title'] = $request->title;
       
        $data['price'] = $request->price;
       
        $data['details'] = $request->details;
       $data['short_desc'] = $request->short_desc;
       $data['home_page_desc'] = $request->home_page_desc;
       $data['home_page']=$request->home_page;
      
        
        DB::table('special_course')->where('id',$course_id)
                ->update($data);
               

        Toastr::success(' Course added Successfull !!  ', 'Success');
       return redirect::to('manage-course-special');

     
 }



public function add_course()
{
     $this->superadmin_auth_check();

        $all_category=DB::table('course_category')->get();

        
        $addcourse=view('admin.pages.add_courses')
                    ->with('all_category',$all_category);
                       
         return view('admin.admin-master')
                ->with('admin_main_content',$addcourse);
}

public function postCourse(Request $request){

        $this->validate($request,array(
            'course_title' => 'required',
            
            'duration' => 'required',   
            'price' => 'required',
            
            'short_desc' => 'required',
            
            
             
        ));


        $data=array();
      
        

         $images = $request->file('course_image');
       
       if($request->hasFile('course_image'))
        {
            foreach ($images as $image) {

        $imageName = $image->getClientOriginalName();

        $image->move(public_path('course_image'),$imageName);
        $data['course_title'] = $request->course_title;
        $data['duration'] = $request->duration;
        $data['price'] = $request->price;
        $data['level'] = $request->level;

         $data['top_position'] = $request->top_position;
        $data['top_priority'] = $request->top_priority;
         $data['buttom_position'] = $request->buttom_position;
        $data['buttom_priority'] = $request->buttom_priority;
        $data['card_bgcolor'] = $request->card_bgcolor;
        $data['card_icon'] = $request->card_icon;
       
        $data['have_subcourse'] = $request->have_subcourse;
         $data['have_course_module'] = $request->have_course_module;
        $data['short_desc'] = $request->short_desc;
        $data['long_desc'] = $request->long_desc;
       
       
        $data['status']=1;
       
         $data['course_image'] = $imageName;
        DB::table('courses')
                ->insert($data);
         
    }
        
               

        Toastr::success(' Course added Successfull !!  ', 'Success');
       return redirect::to('add-course');

     }
 }




public function manage_course()
{
     $this->superadmin_auth_check();

        

        $all_course = DB::table('courses')
           
            ->get();

        $manage_course=view('admin.pages.course_list')
                        ->with('all_course',$all_course);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_course);
}

public function edit_course($id)
{
     $this->superadmin_auth_check();

        

        $all_course = DB::table('courses')->where('id',$id)
           
            ->first();

        $manage_course=view('admin.pages.edit_courses')
                        ->with('all_course',$all_course);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_course);
}

public function updateCourse(Request $request){

        

    $course_id = $request->course_id;
            $data=array();
      
        

         $images = $request->file('course_image');
       
       if($request->hasFile('course_image'))
        {
            foreach ($images as $image) {

        $imageName = $image->getClientOriginalName();

        $image->move(public_path('course_image'),$imageName);
       
       $data['course_image'] = $imageName;
         
         
            }
        }
     $data['course_title'] = $request->course_title;
        $data['duration'] = $request->duration;
        $data['price'] = $request->price;
        $data['top_position'] = $request->top_position;
        $data['top_priority'] = $request->top_priority;
         $data['buttom_position'] = $request->buttom_position;
        $data['buttom_priority'] = $request->buttom_priority;
        $data['card_bgcolor'] = $request->card_bgcolor;
        $data['card_icon'] = $request->card_icon;
        $data['short_desc'] = $request->short_desc;
        $data['long_desc'] = $request->long_desc;
        $data['have_subcourse'] = $request->have_subcourse;
        $data['have_course_module'] = $request->have_course_module;
       
        $data['status']=1;
        
        DB::table('courses')->where('id',$course_id)
                ->update($data);
               

        Toastr::success(' Course added Successfull !!  ', 'Success');
       return redirect::to('manage-course');

     
 }

public function status_course($id,$st){
   if($st==0)
    DB::table('courses')->where('id',$id)->update(['status' => 1]);
    else
    DB::table('courses')->where('id',$id)->update(['status' => 0]);
return redirect::to('manage-course');
    
}

public function report_coupon()
{
     $this->superadmin_auth_check();

       

             $all_coupon = DB::table('events')
            ->join('payments', 'events.application_id', '=', 'payments.reg_id')
            ->join('courses','events.course_id','=','courses.id')
            ->join('coupon_used','events.application_id','=','coupon_used.reg_id')
            ->select('events.*', 'payments.*','courses.course_title','coupon_used.cupon_code')
            
             ->latest('payments.created_at')
            ->get();

        $manage_coupon=view('admin.pages.coupon_used_list')
                        ->with('all_coupon',$all_coupon);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_coupon);
}



//####################//


public function add_subcourse()
{
     $this->superadmin_auth_check();

        
     $all_course=DB::table('courses')->where('have_subcourse',1)->get();
        
        $addcourse=view('admin.pages.add_sub_courses')
                    ->with('all_course',$all_course);
                       
         return view('admin.admin-master')
                ->with('admin_main_content',$addcourse);
}

public function postsubCourse(Request $request){

        $this->validate($request,array(

            'course_id' => 'required',
            'course_title' => 'required',
            
            'duration' => 'required',   
            'price' => 'required',
            
            'short_desc' => 'required',
            
            
             
        ));


        $data=array();
      
        

         $images = $request->file('course_image');
       
       if($request->hasFile('course_image'))
        {
            foreach ($images as $image) {

        $imageName = $image->getClientOriginalName();

        $image->move(public_path('course_image'),$imageName);
        $data['course_id'] = $request->course_id;
        $data['course_title'] = $request->course_title;
        $data['duration'] = $request->duration;
        $data['price'] = $request->price;
       
        $data['short_desc'] = $request->short_desc;
        $data['long_desc'] = $request->long_desc;
       
       
        $data['status']=1;
       
         $data['course_image'] = $imageName;
        DB::table('sub_courses')
                ->insert($data);
         
    }
        
               

        Toastr::success('Sub Course added Successfull !!  ', 'Success');
       return redirect::to('/manage-subcourse');

     }
 }

 public function manage_subcourse()
{
     $this->superadmin_auth_check();

        

        $all_course = DB::table('sub_courses')
           
            ->get();

        $manage_course=view('admin.pages.subcourse_list')
                        ->with('all_course',$all_course);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_course);
}

public function edit_subcourse($id)
{
     $this->superadmin_auth_check();

        

        $all_course = DB::table('sub_courses')->where('sub_course_id',$id)
           
            ->first();

        $manage_course=view('admin.pages.edit_subcourses')
                        ->with('all_course',$all_course);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_course);
}

public function updatesubCourse(Request $request){

        

    $sub_course_id = $request->sub_course_id;
            $data=array();
      
        

         $images = $request->file('course_image');
       
       if($request->hasFile('course_image'))
        {
            foreach ($images as $image) {

        $imageName = $image->getClientOriginalName();

        $image->move(public_path('course_image'),$imageName);
       
       $data['course_image'] = $imageName;
         
         
            }
        }

        $data['course_id'] = $request->course_id;
     $data['course_title'] = $request->course_title;
        $data['duration'] = $request->duration;
        $data['price'] = $request->price;
       
        $data['short_desc'] = $request->short_desc;
        $data['long_desc'] = $request->long_desc;
       
       
        $data['status']=1;
        
        DB::table('sub_courses')->where('sub_course_id',$sub_course_id)
                ->update($data);
               

        Toastr::success(' Course added Successfull !!  ', 'Success');
       return redirect::to('manage-subcourse');

     
 }

public function status_subcourse($id,$st){
   if($st==0)
    DB::table('sub_courses')->where('sub_course_id',$id)->update(['status' => 1]);
    else
    DB::table('sub_courses')->where('sub_course_id',$id)->update(['status' => 0]);
return redirect::to('manage-subcourse');
    
}


public function add_date()
{
     $this->superadmin_auth_check();

        
        $all_course=DB::table('courses')->get();
        
        $adddate=view('admin.pages.add_date')
                ->with('all_course',$all_course);
                       
         return view('admin.admin-master')
                ->with('admin_main_content',$adddate);
}

public function postDate(Request $request){

        $this->validate($request,array(
            'course_id' => 'required',
            
            'course_date' => 'required', 
             
            
            
            
             
        ));


        $data=array();
      
        

        
        $data['course_id'] = $request->course_id;
        $data['course_date'] = $request->course_date;
       
       
        DB::table('course_schedule')
                ->insert($data);
         
    
        
               

        Toastr::success(' Date added Successfull !!  ', 'Success');
       return redirect::to('add-date');

     
 }

public function manage_date()
{
     $this->superadmin_auth_check();

        

        $all_date = DB::table('course_schedule')
                ->join('courses','course_schedule.course_id','=','courses.id')
                ->select('course_schedule.*','courses.course_title')
           
            ->get();

        $manage_date=view('admin.pages.date_list')
                        ->with('all_date',$all_date);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_date);
}

public function edit_date($id)
{
     $this->superadmin_auth_check();

        
        $all_course=DB::table('courses')->get();
        $find_date=DB::table('course_schedule')->where('id',$id)->first();
        
        $adddate=view('admin.pages.edit_date')
                ->with('all_course',$all_course)
                 ->with('find_date',$find_date);
                       
         return view('admin.admin-master')
                ->with('admin_main_content',$adddate);
}

public function updateDate(Request $request){

        $this->validate($request,array(
            'course_id' => 'required',
            
            'course_date' => 'required', 
            
            
            
            
             
        ));

        $id=$request->id;
        $data=array();
      
        

        
        $data['course_id'] = $request->course_id;
        $data['course_date'] = $request->course_date;
        
       
        DB::table('course_schedule')->where('id',$id)
                ->update($data);
         
    
        
               

        Toastr::success(' Date update Successfull !!  ', 'Success');
       return redirect::to('manage-date');

     
 }




public function delete_date($id)
{
    $this->superadmin_auth_check();
    
    DB::table('course_schedule')
            ->where('id',$id)
            ->delete();
        return redirect::to('/manage-date');
}

//Upcoming Event
public function add_news()
{
     $this->superadmin_auth_check();

        
      
        
        $addnews=view('admin.pages.add_news');
                
                       
         return view('admin.admin-master')
                ->with('admin_main_content',$addnews);
}

public function postNews(Request $request){

    $this->validate($request,array(
        'title' => 'required',
        
        'news_image' => 'required',   
        
    ));


    $data=array();
  
    

     $images = $request->file('news_image');
   
   if($request->hasFile('news_image'))
    {
        foreach ($images as $image) {

    $imageName = $image->getClientOriginalName();

    $image->move(public_path('news_image'),$imageName);
    $data['title'] = $request->title;
    $data['news_date'] = $request->news_date;
    $data['news_details'] = $request->news_details;
   

     $data['short_info'] = $request->short_info;
    
    $data['status'] = 1;
   
   
   
    
   
     $data['news_image'] = $imageName;
    DB::table('tbl_news')
            ->insert($data);
     
}
    
           

    Toastr::success(' news added Successfull !!  ', 'Success');
   return redirect::to('add-news');

 }
     
 }

public function manage_news()
{
     $this->superadmin_auth_check();

        

        $all_news = DB::table('tbl_news')->get();
              
                            

        $manage_news=view('admin.pages.news_list')
                        ->with('all_news',$all_news);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_news);
}

public function edit_news($id)
{
     $this->superadmin_auth_check();

        
       
        $find_news=DB::table('tbl_news')->where('id',$id)->first();
        
        $addnews=view('admin.pages.edit_news')
                 ->with('all_news',$find_news);
                       
         return view('admin.admin-master')
                ->with('admin_main_content',$addnews);
}

public function update_news(Request $request){

        $this->validate($request,array(
            'news_title' => 'required',
            
            'news_date' => 'required', 
            
            
            
            
             
        ));

        $id=$request->news_id;
        $data=array();
      
        $images = $request->file('news_image');
       
        if($request->hasFile('news_image'))
         {
             foreach ($images as $image) {
 
         $imageName = $image->getClientOriginalName();
 
         $image->move(public_path('news_image'),$imageName);
        
        $data['news_image'] = $imageName;
          
          
             }
         }
       
        

        
        $data['title'] = $request->news_title;
        $data['news_date'] = $request->news_date;
        $data['news_details'] = $request->news_details;
        $data['short_info'] = $request->short_info;
        $data['status'] = 1;
        DB::table('tbl_news')->where('id',$id)
                ->update($data);
         
    
        
               

        Toastr::success(' News update Successfull !!  ', 'Success');
       return redirect::to('manage-news');

     
 }




public function delete_news($id)
{
    $this->superadmin_auth_check();
    
    DB::table('tbl_news')
            ->where('id',$id)
            ->delete();
        return redirect::to('/manage-news');
}




//Testimonial

public function add_testimonial()
{
     $this->superadmin_auth_check();

        

        
        $addtestimonial=view('admin.pages.add_testimonials');
                       
         return view('admin.admin-master')
                ->with('admin_main_content',$addtestimonial);
}

public function postTestimonial(Request $request){

        $this->validate($request,array(
            'educator_name' => 'required',
            
            'educator_org' => 'required',   
            'educator_designation' => 'required',
            
            'msg_type' => 'required',
            
            
            
             
        ));


        $data=array();
      
        

         $images = $request->file('educator_image');
       
       if($request->hasFile('educator_image'))
        {
            foreach ($images as $image) {

        $imageName = $image->getClientOriginalName();

        $image->move(public_path('educator_image'),$imageName);
        $data['educator_name'] = $request->educator_name;
        $data['educator_org'] = $request->educator_org;
        $data['educator_designation'] = $request->educator_designation;
       

         $data['msg_type'] = $request->msg_type;
        $data['educator_msg'] = $request->educator_msg;
         $data['educator_video_msg'] = $request->educator_video_msg;
        $data['status'] = 1;
       
       
       
        
       
         $data['educator_image'] = $imageName;
        DB::table('tbl_testimonial')
                ->insert($data);
         
    }
        
               

        Toastr::success(' Testimonial added Successfull !!  ', 'Success');
       return redirect::to('add-testimonial');

     }
 }

public function manage_testimonial()
{
     $this->superadmin_auth_check();

        

        $all_testimonial = DB::table('tbl_testimonial')
           
            ->get();

        $manage_testimonial=view('admin.pages.testimonial_list')
                        ->with('all_testimonial',$all_testimonial);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_testimonial);
}

public function edit_testimonial($id)
{
     $this->superadmin_auth_check();

        

        $all_testimonial = DB::table('tbl_testimonial')->where('id',$id)
           
            ->first();

        $manage_testimonial=view('admin.pages.edit_testimonials')
                        ->with('all_testimonial',$all_testimonial);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_testimonial);
}

public function updateTestimonial(Request $request){

        

    $educator_id = $request->educator_id;
            $data=array();
      
        

         $images = $request->file('educator_image');
       
       if($request->hasFile('educator_image'))
        {
            foreach ($images as $image) {

        $imageName = $image->getClientOriginalName();

        $image->move(public_path('educator_image'),$imageName);
       
       $data['educator_image'] = $imageName;
         
         
            }
        }
      $data['educator_name'] = $request->educator_name;
        $data['educator_org'] = $request->educator_org;
        $data['educator_designation'] = $request->educator_designation;
       

         $data['msg_type'] = $request->msg_type;
        $data['educator_msg'] = $request->educator_msg;
        $data['educator_video_msg'] = $request->educator_video_msg;
        $data['status'] = 1;
        
        DB::table('tbl_testimonial')->where('id',$educator_id)
                ->update($data);
               

        Toastr::success(' Testimonial Update Successfull !!  ', 'Success');
       return redirect::to('manage-testimonial');

     
 }


 public function status_testimonial($id,$st){
   if($st==0)
    DB::table('tbl_testimonial')->where('id',$id)->update(['status' => 1]);
    else
    DB::table('tbl_testimonial')->where('id',$id)->update(['status' => 0]);
return redirect::to('manage-testimonial');
    
}



public function olympaid_paid_user($user_type)
{
     $this->superadmin_auth_check();

         if($user_type=='curiosity')
     {

        $all_user = DB::table('olympaid21')
            ->join('payments', 'olympaid21.application_id', '=', 'payments.reg_id')
            ->where('olympaid21.application_id', 'like', 'VCSC211%')
            ->select('olympaid21.*', 'payments.*')
             ->orderBy('payments.created_at', 'desc')
            ->get();

        }
        else{
            $all_user = DB::table('olympaid21')
            ->join('payments', 'olympaid21.application_id', '=', 'payments.reg_id')
            ->where('olympaid21.application_id', 'like', 'NCOJ211%')
            ->select('olympaid21.*', 'payments.*')
             ->orderBy('payments.created_at', 'desc')
            ->get();
        }


        $manage_user=view('admin.pages.olympaid_paid_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}

public function olympaid_unpaid_user($user_type)
{
     $this->superadmin_auth_check();

        
//$orderType=substr($request->app_id,0,7);
     if($user_type=='curiosity')
     {
        $all_user = DB::table('olympaid21')
            ->where('status',0)
          
           ->where('application_id', 'like', 'VCSC211%')
             ->orderBy('created_at', 'desc')
            ->get();
        }
    else
        {
        $all_user = DB::table('olympaid21')
            ->where('status',0)
          
           ->where('application_id', 'like', 'NCOJ211%')
             ->orderBy('created_at', 'desc')
            ->get();
        }


        $manage_user=view('admin.pages.olympaid_unpaid_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}


public function olympaid_school_user()
{
     $this->superadmin_auth_check();

        

        $all_user = DB::table('olympaid_school')
            
             ->orderBy('created_at', 'desc')
            ->get();

        $manage_user=view('admin.pages.olympaid_school_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}

public function cq_paid_user()
{
     $this->superadmin_auth_check();

     
        
            $all_user = DB::table('olympaid21')
            ->join('payments', 'olympaid21.application_id', '=', 'payments.reg_id')
            ->where('olympaid21.application_id', 'like', 'CQ211%')
            ->select('olympaid21.*', 'payments.*')
             ->orderBy('payments.created_at', 'desc')
            ->get();
    


        $manage_user=view('admin.pages.cq_paid_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}

public function cq_unpaid_user()
{
     $this->superadmin_auth_check();

     $all_user = DB::table('olympaid21')
            ->where('status',0)
          
           ->where('application_id', 'like', 'CQ211%')
             ->orderBy('created_at', 'desc')
            ->get();
        
           
    


        $manage_user=view('admin.pages.cq_unpaid_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}


public function cq_school_user()
{
     $this->superadmin_auth_check();

        

        $all_user = DB::table('cq_school')
            
             ->orderBy('created_at', 'desc')
            ->get();

        $manage_user=view('admin.pages.cq_school_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}

public function cbse_school_user()
{
     $this->superadmin_auth_check();

        

        $all_user = DB::table('cbse_school')
            
             ->orderBy('created_at', 'desc')
            ->get();

        $manage_user=view('admin.pages.cbse_school_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}
public function stepup_paid_user($id)
{
     $this->superadmin_auth_check();

     if($id!=19){
        
            $all_user = DB::table('olympaid21')
            ->join('payments', 'olympaid21.application_id', '=', 'payments.reg_id')
            ->where('olympaid21.application_id', 'like', 'STUP211%')
            ->select('olympaid21.*', 'payments.*')
             ->orderBy('payments.created_at', 'desc')
            ->get();
     }
     else{
        $all_user = DB::table('olympaid21')
        ->join('payments', 'olympaid21.application_id', '=', 'payments.reg_id')
        ->where('olympaid21.application_id', 'like', 'SAD211%')
        ->select('olympaid21.*', 'payments.*')
         ->orderBy('payments.created_at', 'desc')
        ->get();

     }


        $manage_user=view('admin.pages.stepup_paid_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}

public function stepup_unpaid_user($id)
{
     $this->superadmin_auth_check();

     if($id!=19){

     $all_user = DB::table('olympaid21')
            ->where('status',0)
          
           ->where('application_id', 'like', 'STUP211%')
             ->orderBy('created_at', 'desc')
            ->get();
     }
        
     else{

        $all_user = DB::table('olympaid21')
               ->where('status',0)
             
              ->where('application_id', 'like', 'SAD211%')
                ->orderBy('created_at', 'desc')
               ->get();
        }
    


        $manage_user=view('admin.pages.stepup_unpaid_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}


public function mocktest_user()
{
     $this->superadmin_auth_check();

        

        $all_user = DB::table('mock_test')
            
             ->orderBy('created_at', 'desc')
            ->get();

        $manage_user=view('admin.pages.mocktest_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}


public function cbse_user()
{
     $this->superadmin_auth_check();

        

        $all_user = DB::table('olympaid21')
        ->where('application_id', 'like', 'CBSE211%')
             ->orderBy('created_at', 'desc')
            ->get();

        $manage_user=view('admin.pages.cbse_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}




public function code_india_code_user()
{
     $this->superadmin_auth_check();

        
//$orderType=substr($request->app_id,0,7);
     
        $all_user = DB::table('olympaid21')
            
          
           ->where('application_id', 'like', 'CIC211%')
             ->orderBy('created_at', 'desc')
            ->get();
        
   


        $manage_user=view('admin.pages.code_india_code_user')
                        ->with('all_user',$all_user);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_user);
}



    public function dropzone()

    {

        $this->superadmin_auth_check();

        

        
        $addclient=view('admin.pages.client-gallery');
                       
         return view('admin.admin-master')
                ->with('admin_main_content',$addclient);

    }

    public function dropzoneStore(Request $request)

    {
        $data=array();
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName().'.'.$image->extension();
        

        $image->move(public_path('client_gallery'),$imageName);
        $data['image_path']=$imageName;

        DB::table('client_gallery')->insert($data);

        return response()->json(['success'=>$imageName]);

    }


//logout

public function admin_logout()
{
  Session::put('admin_id','');
    Session::put('admin_name','');
    Session::put('message','You are Successfully Logout');
    return redirect::to('admin-panel');
}
}
