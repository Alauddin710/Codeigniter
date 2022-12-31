<?php

namespace App\Controllers;

use App\Models\CategoryModel;
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
        $model =  new ProductModel();
        $data['products'] = $model->findAll();
        return view('products/product_list', $data);
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
        $model = new CategoryModel();
        $data['cats'] = $model->orderBy('category_name', 'ASC')->findAll();

        // $data['title'] = "Add Product";
        return view("products/add_product", $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()

    {



        // fild required hoi
        $rules =
            [
                'product_name' => 'required|min_length[5]|max_length[20]',
                'product_details' => 'required|min_length[10]',
                'product_price' => 'required|numeric',
                'product_image' => [
                    'uploaded[product_image]',
                    'mime_in[product_image,image/jpg,image/jpeg,image/png]',
                    'max_size[product_image,1024]',
                ]
            ];
        $errors =
            [
                'product_name' => [
                    'required' => 'Product Name must be fill',
                    'min_length' => 'Minimum length is 5',
                    'max_length' => 'Maximum length is 20',

                ],
                'product_details' => [
                    'required' => 'Product Name must be fill',
                    'min_length' => 'Minimum length is 10',


                ],
                'product_price' => [
                    'required' => 'Product price fill',
                    'numeric' => 'Product price only number',
                ],
                'product_image' => [
                    'mime_in' => 'Product image png, jpg and jpeg allowed',
                    'max_size' => 'Maximum size allowed 1mb',
                ]
            ];



        // $validate = $this->validate([
        //     'product_name' => 'required|min_length[5]|max_length[20]',
        //     'product_details' => 'required|min_length[10]',
        //     'product_price' => 'required|numeric',
        // ]);

        $validation = $this->validate($rules, $errors);
        if (!$validation) {

            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {

            $img = $this->request->getFile('product_image');
            $path = "assets/uploads/";

            $img->move($path);

            $data['product_name'] = $this->request->getPost('product_name');
            //bampaser ta database name and danpaser ta form name
            $data['product_category'] = $this->request->getPost('product_cat');
            $data['product_details'] = $this->request->getPost('product_details');
            $data['product_price'] = $this->request->getPost('product_price');
            $namepath = $path . $img->getName();
            $data['product_image'] = $namepath;

            $model = new ProductModel();
            $model->save($data);
            return redirect()->to('products')->with('insert', 'Data insert successfuly');;
        }
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
        return view('products/edit_product', $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {


        $validate = $this->validate([
            'product_name' => 'required|min_length[5]|max_length[20]',
            'product_details' => 'required|min_length[10]',
            'product_price' => 'required|numeric',
        ]);
        if (!$validate) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $model = new ProductModel();
            $data['product_name'] = $this->request->getPost('product_name');
            $data['product_details'] = $this->request->getPost('product_details');
            $data['product_price'] = $this->request->getPost('product_price');
            $model->update($id, $data);
            return redirect()->to('products')->with('msg', 'Update successfuly');
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
        return redirect()->to("products")->with('del', 'Delete successfuly');
    }
}
