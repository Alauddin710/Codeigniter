<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class UserCrud extends BaseController
{
    public function index()
    {

        $userObj = new UserModel();
        $data['myuser'] = $userObj->findAll();

        return view('display_user', $data);
    }
}