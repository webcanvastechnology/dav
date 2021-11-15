<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class AdminController extends Controller
{
    public function index()
    {
        $this->auth_check();
        
        return view('admin.admin_login');


    }
public function auth_check()
{
    session_start();
    $admin_id=Session::get('admin_id');
    if($admin_id !=NULL)
    {
        return redirect::to('dashboard')->send();
    }
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_login_check(Request $request)
    {
        $email_address=$request->email_address;
        $password=$request->password;

       // echo $email_address.'-----------'.$password;
        $result = DB::table('tbl_admin')->select('*')
                                        ->where('email',$email_address)
                                        ->where('password',md5($password))
                                        ->first();


                    //echo '<pre>';
                   // print_r($result);
                   //exit();
                    if($result)
                    {
                           Session::put('admin_id',$result->id);
                           Session::put('admin_name',$result->name);
                           return redirect::to('dashboard');
                    }
                    else
                    {
                        Session::put('message','Invalid User ID or Password');
                            return redirect::to('admin-panel');
                    }
    }

}
