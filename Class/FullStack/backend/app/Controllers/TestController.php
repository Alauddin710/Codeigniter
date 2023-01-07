<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class TestController extends BaseController
{
    public function index()
    {

        $data['page_title'] = "Home Page";
        return view('pages/home_page');
    }
    public function about()
    {
        return view('pages/about');
    }
    public function productlist()
    {
        $model = new ProductModel();
        $data = [
            'products' => $model->paginate(5, 'group1'),
            'pager' => $model->pager,
        ];
        return view('pages/list', $data);
    }
}
