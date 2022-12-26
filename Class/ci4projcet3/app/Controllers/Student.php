<?php

namespace App\Controllers;

use App\Models\StudenModel;
use CodeIgniter\RESTful\ResourceController;

class Student extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {

        $modeldata = new StudenModel();
        $data['students'] = $modeldata->findAll();
        $data['title'] = "All Students";
        //print_r($data);
        return view('students/students_list', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $data['title'] = "Student Entry";
        return view('students/add_student', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $model = new StudenModel();
        // $data['name'] =  $this->request->getPost('name');
        // $data['phone'] =  $this->request->getPost('phone');
        // $data['email'] =  $this->request->getPost('email');
        // $data['address'] =  $this->request->getPost('address');
        $data =  $this->request->getPost();


        if ($model->save($data)) {

            return redirect('Student');
            //return redirect()->back(); 
            //return $this->index();
        }
        // print_r($data);
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        // echo "eys";
        $model = new StudenModel();
        $data['student'] = $model->find($id);
        return view('students/edit_student', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {

        $model = new StudenModel();
        $data = $this->request->getPost();


        //print_r($data);
        if ($model->update($id, $data)) {
            return redirect()->to("student");
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new StudenModel();
        $model->delete($id);
        return redirect()->to("student");
    }
}
