<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function about()
    {
        return "This is about";
    }
    public function user($id)
    {
        return "You Have this ID $id";
    }
}
