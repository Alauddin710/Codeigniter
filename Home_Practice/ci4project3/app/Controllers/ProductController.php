<?php

namespace App\Controllers;
use\App\Models\ProductModel;
use CodeIgniter\RESTful\ResourceController;

class ProductController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
    //   echo "Yes";
      $modeldata = new ProductModel();
      $data['products']=$modeldata->findAll();
    //   print_r($data);
    return view('products/products_list',$data);
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
        $data['title']="Entry Product";
        return view('products/add_product',$data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $modeldata = new ProductModel();
        $data= $this->request->getPost();
        if($modeldata->save($data)){
            return redirect('ProductController');
        }
        
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        echo "yes";
        $modeldata = new ProductModel();
       
    $data['product']= $modeldata->find($id);
       // print_r('$data');
        return view('products/edit_product',$data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $modeldata = new ProductModel();
        $data = $this->request->getPost();
        if($modeldata->update($id,$data)){
            return redirect('ProductController');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
       $modeldata = new ProductModel();
       $modeldata->delete($id);
       return redirect('ProductController');
    }
}
