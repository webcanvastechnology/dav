<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('user.pages.home');
    }

    public function courses()
    {
        return view('user.pages.courses');
    }

    public function course_details()
    {
        return view('user.pages.course-details');
    }

}
