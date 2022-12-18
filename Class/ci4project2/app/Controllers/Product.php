<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        return "Product Home page";
    }
    public function single()
    {
        return "This is single page";
    }
}
