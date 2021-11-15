<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use Toastr;


class WorkshopController extends Controller
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

    public function add_workshops()
    {
        $this->superadmin_auth_check();

        $addworkshop=view('admin.pages.add_workshops');
                    
                        
            return view('admin.admin-master')
                    ->with('admin_main_content',$addworkshop);
    }

    public function postworkshops(Request $request){

        $this->validate($request,array(
            'workshops_title' => 'required',
            
            'reg_link' => 'required',
            'date_details' => 'required',
            'venu' => 'required',
            'organizer' => 'required',
            
            'long_desc' => 'required',
            
            
             
        ));


        $data=array();
      
        

         $images = $request->file('course_image');
       
       if($request->hasFile('course_image'))
        {
            foreach ($images as $image) {

        $imageName = $image->getClientOriginalName();

        $image->move(public_path('workshop_image'),$imageName);
        $data['workshops_title'] = $request->workshops_title;
        $data['reg_link'] = $request->reg_link;
        $data['venu'] = $request->venu;
        

        
        $data['date_details'] = $request->date_details;
        
        $data['organizer'] = $request->organizer;
       
       
       
        $data['long_desc'] = $request->long_desc;
       
       
        $data['status']=1;
       
         $data['course_image'] = $imageName;
        DB::table('free_workshops')
                ->insert($data);
         
    }
        
               

        Toastr::success(' workshop added Successfull !!  ', 'Success');
       return redirect::to('add-workshops');

     }
 }

    public function manage_workshop()
    {
        $this->superadmin_auth_check();

            

            $all_workshops = DB::table('free_workshops')
            
                ->get();

            $manage_workshops=view('admin.pages.workshops_list')
                            ->with('all_workshops',$all_workshops);
            return view('admin.admin-master')
                    ->with('admin_main_content',$manage_workshops);
    }

     public function edit_workshop($id)
        {
            $this->superadmin_auth_check();

                

                $all_workshop = DB::table('free_workshops')->where('id',$id)
                
                    ->first();

                $manage_workshop=view('admin.pages.edit_workshops')
                                ->with('all_workshop',$all_workshop);
                return view('admin.admin-master')
                        ->with('admin_main_content',$manage_workshop);
        }
        public function updateworkshop(Request $request){

            $workshop_id = $request->workshops_id;
            $data=array();

            $this->validate($request,array(
                'workshops_title' => 'required',
                
                'reg_link' => 'required',
                'date_details' => 'required',
                'venu' => 'required',
                'organizer' => 'required',
                
                'long_desc' => 'required',
                
                
                 
            ));
    
    
            

            $images = $request->file('course_image');
       
            if($request->hasFile('course_image'))
             {
                 foreach ($images as $image) {
     
             $imageName = $image->getClientOriginalName();
     
             $image->move(public_path('workshop_image'),$imageName);
            
            $data['course_image'] = $imageName;
              
              
                 }
             }
          
            
    
            
            $data['workshops_title'] = $request->workshops_title;
            $data['reg_link'] = $request->reg_link;
            $data['venu'] = $request->venu;
            
    
            
            $data['date_details'] = $request->date_details;
            
            $data['organizer'] = $request->organizer;
           
           
           
            $data['long_desc'] = $request->long_desc;
           
           
            $data['status']=1;
           
            DB::table('free_workshops')->where('id',$workshop_id)
                ->update($data);
                Toastr::success(' workshop Update Successfull !!  ', 'Success');
       return redirect::to('manage-workshop');
             
        }
            
    public function status_workshop($id,$st){
        if($st==0)
        DB::table('free_workshops')->where('id',$id)->update(['status' => 1]);
        else
        DB::table('free_workshops')->where('id',$id)->update(['status' => 0]);
    return redirect::to('manage-workshop');
        
    }
}
