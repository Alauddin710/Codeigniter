<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\ProductModel;
class Products extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
       $model=  new ProductModel();
       $data['products']= $model->findAll();
       return view('products/product_list',$data);

      
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
      $data['title']="Add Product";
      return view("products/add_product");

    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $model = new ProductModel();
        $data = $this->request->getPost();
        $model->save($data);
        return redirect()->to('products');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id);
        return view('products/edit_product',$data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $model = new ProductModel();
        $data = $this->request->getPost();

        if($model->update($id, $data)){
            return redirect()->to('products');

        }
        

    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
    
        $model = new ProductModel();
        $model->delete($id);
        return redirect()->to("products");
    }
}
