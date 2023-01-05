<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Qb extends BaseController
{
    public function index()
    {
        // $db      = \Config\Database::connect();
        // $builder = $db->table('products');
        // $dat = $builder->get(2, 4);
        // $data['products'] = $dat->getResult();
        // echo "<pre>";
        // print_r($data);


        $db      = \Config\Database::connect();
        // 111111
        // $builder = $db->table('employees')->select('firstName, lastName, email,')->where('jobTitle="Sales Rep"');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);
        // echo "<hr>";

        //2222222
        // $builder = $db->table('employees')->select('firstName,lastName,email');
        // $row = $builder->where('jobTitle="Sales Rep"');
        // $row = $builder->where('reportsTo=1143');
        // $data = $row->get()->getResult();
        // echo "<pre>";
        // print_r($data);


        //33333
        // $builder = $db->table('employees,offices')->select('firstName,lastName,email,city, country')->where('employees.officeCode=offices.officeCode and offices.country="USA"');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);

        // 44444

        // $builder = $db->table('orders')->select('customerName,phone,city,orderDate,status')->join('customers', 'customers.customerNumber= orders.customerNumber');
        // $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);

        $builder = $db->table('orders,customers,orderdetails,products');
        $builder->select('customerName,city,orders.orderNumber,orderDate,products.productCode,productName,quantityOrdered,priceEach,MSRP')->selectSum('quantityOrdered')->selectSum('priceEach')->groupBy('orders.orderNumber')->where('orders.orderNumber=orderdetails.orderNumber and products.productCode=orderdetails.productCode and orders.customerNumber =customers.customerNumber');

        $data = $builder->get()->getResult();
        echo "<pre>";
        print_r($data);
    }
}
