<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;

class UserCrud extends BaseController
{
    public function index()
    {
        $usreObj = new UserModel();
        // $data['users'] = $usrsObj->OrderBy('id', 'DESC')->findAll();
        // $data['users'] = $usrsObj->findAll();
        $data['myusers'] = $usreObj->findAll();
        return view('user_display', $data);
    }
    public function create()
    {
        helper(['form']);
        return view('user_create');
    }
    public function store()

    {
        //helper(['form']); // akane ata lage nai karon holo configer modde autoload.php laste ['form'] ta dile hobe
        $rules = [
            'u_name' => 'required',
            'u_email' => 'required'
        ];
        if ($this->validate($rules)) {

            $usreObj = new UserModel();
            $data['name'] = $this->request->getVar('u_name');
            $data['email'] = $this->request->getVar('u_email');
            //print_r($data);
            $usreObj->insert($data);
            $this->response->redirect('/userdisplay');
        } else {
            $data['validation'] = $this->validator;
            return view('user_create', $data);
        }
    }
    public function delete($id)
    {
        //echo $id;
        $usreObj = new UserModel();
        $usreObj->where('id', $id)->delete($id);
        $this->response->redirect('/userdisplay');
    }
    public function edit($id)
    {
        $usreObj = new UserModel();
        $data['user'] = $usreObj->find($id);
        return view('user_edit', $data);
        // print_r($data);
    }
    public function update()
    {
        $usreObj = new UserModel();
        $id = $this->request->getVar('u_id');
        $data['name'] = $this->request->getVar('u_name');
        $data['email'] = $this->request->getVar('u_email');
        $usreObj->update($id, $data);
        $this->response->redirect('/userdisplay');
    }
}