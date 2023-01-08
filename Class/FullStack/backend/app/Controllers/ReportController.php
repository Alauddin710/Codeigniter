<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ReportController extends BaseController
{
    public function stafflist()
    {
        $db = db_connect('query_builder');
        $builder = $db->table('offices');
        $data = $builder->get()->getResultArray();
        //dd($data);
        return view('reports/office_list', ['offices' => $data]);
    }
    public function allstaff()
    {
        // echo "Hello";
        $code = $_GET['offcode'];
        $db = db_connect('query_builder');
        $builder = $db->table('employees');
        $builder->where('officeCode', $code);
        $data['empls'] = $builder->get()->getResultArray();
        return view('reports/off_staff_list', $data);
        // dd($data);

    }
    public function orderlist()
    {
            // echo "Hello";
        ;
        return view('reports/orderlist_form');
        // dd($data);

    }
    public function orderQuery()
    {
        $start = $_GET['start'];
        $end = $_GET['end'];
        $db = db_connect('query_builder');
        // $builder = $db->table('customers,orders');
        // $builder->where("orders.customerNumber = customers.customerNumber");
        $builder = $db->query("SELECT customerName,phone,city,orderName,orderDate, status FROM oredrs,customers WHERE orders.customerNumber = cumsomers.customerNumber AND orders.orderDate between '$start' AND '$end' ");
        $data['orders'] = $builder->getResultArray();
        dd($data);
    }
}
