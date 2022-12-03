<?php

namespace App\Controllers;

use App\Models\UserModel;

use App\Controllers\BaseController;

class UserCrud extends BaseController
{
    public function index()
    {
        $usrsObj = new UserModel();
        // $data['users'] = $usrsObj->OrderBy('id', 'DESC')->findAll();
        // $data['users'] = $usrsObj->findAll();
        $data['myusers'] = $usrsObj->findAll();
        return view('user_display', $data);
    }
}
