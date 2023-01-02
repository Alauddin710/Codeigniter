<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\API\ResponseTrait;

class Frontend extends BaseController
{

    use ResponseTrait;
    public function ProductList()
    {
        $model = new ProductModel();
        $porducts = $model->orderBy('product_name', "ASC")->findAll();
        return $this->respond($porducts);
    }
}
