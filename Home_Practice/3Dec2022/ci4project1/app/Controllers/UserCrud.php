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
    // Add User Create Form
    public function create()
    {
        return view('add_user');
    }

    // insert data
    public function store()
    {
        $userModel = new UserModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/users-list'));
    }
    // show single user
    public function singleUser($id = null)
    {
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('id', $id)->first();
        return view('edit_user', $data);
    }
    // update user data
    public function update()
    {
        $userModel = new UserModel();
        $id = $this->request->getVar('id');
        $data = [
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/users-list'));
    }
}