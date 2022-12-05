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
        // echo "<pre>";
        // print_r($data);
        return view('user_display', $data);
    }
    public function create()
    {
        helper(['form']);
        return view('user_create');
    }
    public function store()
    {
        helper(['form']); 
        $rules = [
            'u_name' => 'required',
            'u_email' => 'required'
        ];
        if ($this->validate($rules)) {
            $userObj = new UserModel();
            $data['name'] = $this->request->getVar('u_name');
            $data['email'] = $this->request->getVar('u_email');
            // print_r($data);
            $userObj->insert($data);
            $this->response->redirect('/users'); // atar maddome redirect hoi
        } else {
            $data['validation'] = $this->validator;
            return view('user_create', $data);
        }
    }
    public function delete($id)
    {
        // echo $id;
        $userObj = new UserModel();
        $userObj->Where('id', $id)->delete($id);
        $this->response->redirect('/users'); // atar maddome redirect hoi
    }

    public function edit($id)
    {
        $userObj = new UserModel();
        $data['user'] = $userObj->find($id);
        // print_r($data);
        return view('user_edit', $data);
        // $userObj->where('id', $id)->find($id);
    }
    public function update()
    {
        $userObj = new UserModel();
        $id = $this->request->getVar('u_id'); //ata holo hidden id
        $data['name'] = $this->request->getVar('u_name');
        $data['email'] = $this->request->getVar('u_email');
        $userObj->update($id, $data);
        $this->response->redirect('/users');
    }
}
