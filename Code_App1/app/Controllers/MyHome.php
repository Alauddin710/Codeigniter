<?php

namespace App\Controllers;

class MyHome extends BaseController
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact_us');
    }
    public function page()
    {
        return view('page');
    }
}
