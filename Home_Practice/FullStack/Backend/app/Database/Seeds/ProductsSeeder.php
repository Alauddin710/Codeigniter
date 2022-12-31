<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $datas=[
            [
            'product_name'=>"Balack Jacket",
            'product_details'=>"This is Black Jacket",
            'product_price'=>"5000",
            'product_category'=>1,
            ],
            [
            'product_name'=>"Blue Jacket",
            'product_details'=>"This is Blue Jacket",
            'product_price'=>"6000",
            'product_category'=>1,
            ],
            [
            'product_name'=>"Red Jacket",
            'product_details'=>"This is Red Jacket",
            'product_price'=>"4000",
            'product_category'=>2,
            ],
            [
            'product_name'=>"Green Jacket",
            'product_details'=>"This is Green Jacket",
            'product_price'=>"3000",
            'product_category'=>2,
            ],
            [
            'product_name'=>"Shirt",
            'product_details'=>"This is Black Jacket",
            'product_price'=>"25000",
            'product_category'=>3,
            ],
            [
            'product_name'=>"Pant Jacket",
            'product_details'=>"This is Black Jacket",
            'product_price'=>"3000",
            'product_category'=>3,
            ],
            [
            'product_name'=>"Half Jacket",
            'product_details'=>"This is Black Jacket",
            'product_price'=>"5000",
            'product_category'=>4,
            ],
    ];
       // // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // // Using Query Builder
    foreach ($datas as $data){
    $this->db->table('products')->insert($data);
}
       
}
}
