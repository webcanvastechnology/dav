<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use Toastr;

class RegularCourseController extends Controller
{
        public function superadmin_auth_check()
    {
        session_start();
        $admin_id=Session::get('admin_id');
        if($admin_id ==NULL)
        {
            return redirect::to('admin-panel')->send();
        }
    }

    public function add_course()
    {
        $this->superadmin_auth_check();

        $all_audience = DB::table('aud_category')->get();
        $all_category=DB::table('course_category')->get();
            
        $addcourse=view('admin.pages.add_regular_courses')
                    ->with('all_audience',$all_audience)
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

        $image->move(public_path('regular_course_image'),$imageName);
        $data['course_title'] = $request->course_title;
        $data['duration'] = $request->duration;
        $data['price'] = $request->price;
        $data['level'] = $request->level;
        $data['course_category'] = $request->course_category;

        
        $data['priority'] = $request->priority;
        
        $data['card_bgcolor'] = $request->card_bgcolor;
       
       
        $data['audience_category'] =  json_encode($request->cat);
         $data['have_individual_module'] = $request->have_individual_module;
        $data['short_desc'] = $request->short_desc;
        $data['long_desc'] = $request->long_desc;
        $data['email_subject'] = $request->email_subject;
        $data['email_desc'] = $request->email_desc;
       
       
        $data['status']=1;
       
         $data['course_image'] = $imageName;
        DB::table('regular_courses')
                ->insert($data);
         
    }
        
               

        Toastr::success(' Course added Successfull !!  ', 'Success');
       return redirect::to('add-regular-course');

     }
 }

 public function manage_course()
{
     $this->superadmin_auth_check();

        

        $all_course = DB::table('regular_courses')
           
            ->get();

        $manage_course=view('admin.pages.regular_course_list')
                        ->with('all_course',$all_course);
         return view('admin.admin-master')
                ->with('admin_main_content',$manage_course);
}

public function edit_regular_course($id)
    {
        $this->superadmin_auth_check();

        $all_audience = DB::table('aud_category')->get();
        $find_course = DB::table('regular_courses')->where('id',$id)->first();
        $all_category=DB::table('course_category')->get();
            
        $addcourse=view('admin.pages.edit_regular_courses')
                    ->with('all_audience',$all_audience)
                    ->with('find_course',$find_course)
                    ->with('all_category',$all_category);
                        
            return view('admin.admin-master')
                    ->with('admin_main_content',$addcourse);
    }

    public function updateCourse(Request $request){
        $this->superadmin_auth_check();

        $course_id=$request->course_id;

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

        $image->move(public_path('regular_course_image'),$imageName);
       
       $data['course_image'] = $imageName;
         
         
            }
        }

         
        $data['course_title'] = $request->course_title;
        $data['duration'] = $request->duration;
        $data['price'] = $request->price;
        
        $data['level'] = $request->level;
        $data['course_category'] = $request->course_category;
        
        $data['priority'] = $request->priority;
        
        $data['card_bgcolor'] = $request->card_bgcolor;
       
       
        $data['audience_category'] =  json_encode($request->cat);
         $data['have_individual_module'] = $request->have_individual_module;
        $data['short_desc'] = $request->short_desc;
        $data['long_desc'] = $request->long_desc;
        $data['email_subject'] = $request->email_subject;
        $data['email_desc'] = $request->email_desc;
       
       
        $data['status']=1;
       
         
        DB::table('regular_courses')->where('id',$course_id)
                ->update($data);
         
    
        
               

        Toastr::success(' Course updated Successfull !!  ', 'Success');
       return redirect::to('manage-regular-course');

     
 }
 public function status_course($id,$st){
    $this->superadmin_auth_check();
    if($st==0)
     DB::table('regular_courses')->where('id',$id)->update(['status' => 1]);
     else
     DB::table('regular_courses')->where('id',$id)->update(['status' => 0]);
 return redirect::to('manage-regular-course');
     
 }

 public function delete_course($id)
{
    $this->superadmin_auth_check();
    
    DB::table('regular_courses')
            ->where('id',$id)
            ->delete();
        return redirect::to('/manage-regular-course');
}

 public function add_audience()
 {
      $this->superadmin_auth_check();
 
         $addaudience=view('admin.pages.add_aud_category');
                     
                        
          return view('admin.admin-master')
                 ->with('admin_main_content',$addaudience);
 }
 
 public function postaudience(Request $request){
 
         $this->validate($request,array(
 
             
             'aud_name' => 'required',
             'aud_title' => 'required',
             
             'aud_max' => 'required',   
             'aud_min' => 'required',
             
             'aud_short_desc' => 'required',
             
             
              
         ));
 
 
         $data=array();
       
         
 
         /*  $images = $request->file('course_image');
        
        if($request->hasFile('course_image'))
         {
             foreach ($images as $image) {
 
         $imageName = $image->getClientOriginalName();
 
         $image->move(public_path('course_image'),$imageName); */
        
         $data['aud_name'] = $request->aud_name;
         $data['aud_title'] = $request->aud_title;
         $data['aud_min'] = $request->aud_min;
         $data['aud_max'] = $request->aud_max;
         $data['price'] = $request->price;
        
         $data['aud_short_desc'] = $request->aud_short_desc;
         
        
        
         $data['status']=1;
        
          
         DB::table('aud_category')
                 ->insert($data);
          
   /*   } */
         
                
 
         Toastr::success('Audience added Successfull !!  ', 'Success');
        return redirect::to('/manage-audience');
 
      }

        public function manage_audience()
    {
        $this->superadmin_auth_check();

            

            $all_audience = DB::table('aud_category')
            
                ->get();

            $manage_audience=view('admin.pages.audience_list')
                            ->with('all_audience',$all_audience);
            return view('admin.admin-master')
                    ->with('admin_main_content',$manage_audience);
    }

    public function edit_audience($id)
    {
        $this->superadmin_auth_check();

            
            $find_aud = DB::table('aud_category')->where('aud_id',$id)->first();
                            
            $manage_audience=view('admin.pages.edit_aud_category')
                            ->with('find_aud',$find_aud);
            return view('admin.admin-master')
                    ->with('admin_main_content',$manage_audience);
    }

    public function updateaudience(Request $request){


        $aud_id=$request->aud_id;
 
        $this->validate($request,array(

            
            'aud_name' => 'required',
            'aud_title' => 'required',
            
            'aud_max' => 'required',   
            'aud_min' => 'required',
            
            'aud_short_desc' => 'required',
            
            
             
        ));


        $data=array();
      
        

        /*  $images = $request->file('course_image');
       
       if($request->hasFile('course_image'))
        {
            foreach ($images as $image) {

        $imageName = $image->getClientOriginalName();

        $image->move(public_path('course_image'),$imageName); */
       
        $data['aud_name'] = $request->aud_name;
        $data['aud_title'] = $request->aud_title;
        $data['aud_min'] = $request->aud_min;
        $data['aud_max'] = $request->aud_max;
        $data['price'] = $request->price;
       
        $data['aud_short_desc'] = $request->aud_short_desc;
        
       
       
        $data['status']=1;
       
         
        DB::table('aud_category')->where('aud_id',$aud_id)->update($data);
                
         
  /*   } */
        
               

        Toastr::success('Audience Updated Successfull !!  ', 'Success');
       return redirect::to('/manage-audience');

     }

     public function status($id,$st){
        $this->superadmin_auth_check();
        if($st==0){
         DB::table('aud_category')->where('aud_id',$id)->update(['status' => 1]);
        }
         else{
         DB::table('aud_category')->where('aud_id',$id)->update(['status' => 0]);
         }

         Toastr::success('Status Updated Successfull !!  ', 'Success');
         return redirect::to('/manage-audience');
         
     }

     public function payment_link($id,$st){
        $this->superadmin_auth_check();
        if($st==0){
         DB::table('aud_category')->where('aud_id',$id)->update(['payment_link' => 1]);
        }
         else{
         DB::table('aud_category')->where('aud_id',$id)->update(['payment_link' => 0]);
         }

         Toastr::success('Payment Link Updated Successfull !!  ', 'Success');
         return redirect::to('/manage-audience');
         
     }

     public function add_category()
 {
      $this->superadmin_auth_check();
 
         $addcategory=view('admin.pages.add_course_category');
                     
                        
          return view('admin.admin-master')
                 ->with('admin_main_content',$addcategory);
 }
 
 public function postcategory(Request $request){
 
         $this->validate($request,array(
 
             
             'category_name' => 'required',
             
             
             'category_desc' => 'required',
             
             
              
         ));
 
 
         $data=array();
       
         
 
         /*  $images = $request->file('course_image');
        
        if($request->hasFile('course_image'))
         {
             foreach ($images as $image) {
 
         $imageName = $image->getClientOriginalName();
 
         $image->move(public_path('course_image'),$imageName); */
        
         $data['category_name'] = $request->category_name;
        
         $data['category_desc'] = $request->category_desc;
         
        
        
         $data['status']=1;
        
          
         DB::table('course_category')
                 ->insert($data);
          
   /*   } */
         
                
 
         Toastr::success('Category added Successfull !!  ', 'Success');
        return redirect::to('/manage-category');
 
      }

        public function manage_category()
    {
        $this->superadmin_auth_check();

            

            $all_category = DB::table('course_category')
            
                ->get();

            $manage_category=view('admin.pages.course_category_list')
                            ->with('all_category',$all_category);
            return view('admin.admin-master')
                    ->with('admin_main_content',$manage_category);
    }

    public function edit_category($id)
    {
        $this->superadmin_auth_check();

            
            $find_category = DB::table('course_category')->where('id',$id)->first();
                            
            $manage_category=view('admin.pages.edit_course_category')
                            ->with('find_category',$find_category);
            return view('admin.admin-master')
                    ->with('admin_main_content',$manage_category);
    }

    public function updatecategory(Request $request){


        $category_id=$request->category_id;
 
        $this->validate($request,array(

            
            'category_name' => 'required',
            
            
            'category_desc' => 'required',
            
            
             
        ));


        $data=array();
      
        

        /*  $images = $request->file('course_image');
       
       if($request->hasFile('course_image'))
        {
            foreach ($images as $image) {

        $imageName = $image->getClientOriginalName();

        $image->move(public_path('course_image'),$imageName); */
       
        $data['category_name'] = $request->category_name;
       
       
        $data['category_desc'] = $request->category_desc;
        
       
       
        $data['status']=1;
       
         
        DB::table('course_category')->where('id',$category_id)->update($data);
                
         
  /*   } */
        
               

        Toastr::success('Category Updated Successfull !!  ', 'Success');
       return redirect::to('/manage-category');

     }


  

}
