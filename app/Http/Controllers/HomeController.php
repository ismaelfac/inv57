<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.content');
    }


    public function blog()
    {
        return view('website.blog');
    }
    public function properties()
    {
        return view('website.properties');
    }

    public function brand()
    {

        return view('website.brand');
    }


    public function about()
    {

        return view('website.about_us');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function marca()
    {
        return view('website.marca');
    }
}
