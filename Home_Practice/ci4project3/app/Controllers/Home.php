<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title']="My Home Page";
        return view('welcome_message',$data);
    }
    public function about(){
        $data['title']="My About Page";
        return view('/About',$data);
    }
    public function contact(){
        $data['title']="My contact page";
        return view('/Contact',$data);
    }
}