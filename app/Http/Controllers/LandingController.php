<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        return view('landing_pages.pages.home');
    }

    public function uiux()
    {
        return view('landing_pages.pages.uiux');
    }

    public function case_study()
    {
        return view('landing_pages.pages.case-study');
    }

    public function about_us()
    {
        return view('landing_pages.pages.about-us');
    }

    public function portfolio()
    {
        return view('landing_pages.pages.portfolio');
    }

    public function blog()
    {
        return view('landing_pages.pages.blog');
    }

    public function contact()
    {
        return view('landing_pages.pages.contact');
    }

    public function single_blog()
    {
        return view('landing_pages.pages.blog-single');
    }
}
