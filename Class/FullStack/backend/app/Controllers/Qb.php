<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class Qb extends BaseController
{
    public function index()
    {
        // $db      = \Config\Database::connect();

        // $builder = $db->table('products');

        // echo "<pre>";
        // $raw = $builder->get();
        // $data['products'] = $raw->getResult();
        // // print_r($data);
        // // print_r($data);

        // return view('test', $data);

        // $db      = \Config\Database::connect();
        // $builder = $db->table('products')->limit(4, 2);
        // $builder = $db->table('products');

        // echo "<pre>";
        // $raw = $builder->getWhere(['id' => 2]);
        // $data = $raw->getResult();
        // // print_r($data);
        // print_r($data);

        //####################
        // $builder = $db->table('products')->select('id, product_name, product_price')->get();

        // // $raw = $builder->select('id, product_name, product_price');
        // // $data = $builder->get();
        // $data = $builder->getResult();
        // echo "<pre>";
        // print_r($data);

        // #####################
        // $builder = $db->table('products')->selectMax(' product_price')->get();
        // $data =  $builder->getResult();
        // echo "<pre>";
        // print_r($data);


        // $builder = $db->table('products')->select('product_category')->selectSum('product_price')->groupBy('product_category')->get();
        // $data =  $builder->getResult();
        // echo "<pre>";
        // print_r($data);

        // ########
        // $builder = $db->table('products');
        // $builder->join('categories', 'categories.id = products.product_category');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);


        // ########
        // $builder = $db->table('products,categories');
        // $builder->where('categories.id = products.product_category');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);



        // $builder = $db->table('products');

        // $builder->where('product_price>1000');
        // $builder->where('product_price<1500');
        // $builder->where('product_category>5');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);



        //**************
        //1 Query Builder
        $db      = \Config\Database::connect('query_builder');
        // $builder = $db->table('employees')->select('firstName, lastName, email,')->where('jobTitle="Sales Rep"');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);
        // echo "<hr>";

        //22222222 hoice
        // $builder = $db->table('employees');
        // $row = $builder->select('firstName, lastName, email');
        // $row = $builder->where(array('jobTitle' => 'Sales Rep'));
        // $row = $builder->where(array('reportsTo' => '1143'));


        // $data = $row->get()->getResultArray();
        // echo "<pre>";
        // print_r($data);
        // echo "<hr>";

        //3333333 hoise
        // $builder = $db->table('employees, offices')->select('firstName, lastName, email,city,country')->where('employees.officeCode = offices.officeCode and offices.country="USA" ');

        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);

        //444 hoice
        // $builder = $db->table('orders');
        // $builder->select('customerName,phone,orderNumber,orderDate,status');
        // $row = $builder->join('customers', 'customers.customerNumber = orders.customerNumber');
        // $data = $row->get()->getResult();


        // echo "<pre>";
        // print_r($data);
        //*****
        //         SELECT customerName, city, orders.orderNumber, orderDate, products.productCode, productName, sum(quantityOrdered), sum(priceEach), MSRP
        // from orders, orderdetails, customers, products where
        // orders.orderNumber = orderdetails.orderNumber AND
        // products.productCode = orderdetails.productCode AND
        // orders.customerNumber =  customers.customerNumber
        // GROUP BY orders.orderNumber

        //555555555
        // $builder = $db->table('customers');
        // $builder->select('customerName,phone,city,orders.orderNumber,orderDate,status, quantityOrdered, priceEach');
        // $row = $builder->join('orders', 'orders.customerNumber = customers.customerNumber');
        // $row = $builder->join('orderdetails', 'orderdetails.orderNumber = orders.orderNumber');
        // $data = $row->get()->getResult();


        // echo "<pre>";
        // print_r($data);


        //66666
        $builder = $db->table('orders, orderdetails, customers, products');
        $builder->select('customerName, city, orders.orderNumber, orderDate, products.productCode, productName,quantityOrdered,priceEach, MSRP')->selectSum('quantityOrdered')->selectSum('priceEach')->groupBy('orders.orderNumber')->where('orders.orderNumber = orderdetails.orderNumber and
        products.productCode = orderdetails.productCode and
        orders.customerNumber =  customers.customerNumber');
        $data = $builder->get()->getResult();


        echo "<pre>";
        print_r($data);
    }
}
