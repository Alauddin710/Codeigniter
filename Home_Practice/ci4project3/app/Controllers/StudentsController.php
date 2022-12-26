<?php

namespace App\Controllers;

use App\Models\StudentModel;
use CodeIgniter\RESTful\ResourceController;

class StudentsController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $modeldata = new StudentModel();
        $data['students']=$modeldata->findAll();
        // print_r($data);
        $data['title']= "All Students list";
        return view('students/students_list',$data);
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
        $data['title']="Student Entry";
        return view('students/add_student',$data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
       $model = new StudentModel(); //ata asce student model theke
        // echo $this->request->getPost('name'); // aigulo asce add_student theke
        // echo $this->request->getPost('phone');
        // echo $this->request->getPost('email');
        // echo $this->request->getPost('address');

        $data = $this->request->getPost();
        
        if($model->save($data)){
            
            return redirect('StudentsController');
        } ;

        
        // print_r($data);

    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        // echo "yes";
       $model =  new StudentModel();
       $data ['student'] = $model->find($id);
       return view('students/edit_student', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        // echo "yes";
         $model = new StudentModel();
        $data = $this->request->getPost();
        
        if($model->update($id, $data)){
          return redirect()->to('StudentsController');
        }

        //print_r($data);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
      $model = new StudentModel();
      $model->delete($id);
      return redirect()->to("StudentsController");
    }
}