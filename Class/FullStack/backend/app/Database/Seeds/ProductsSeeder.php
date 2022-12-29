<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $datas = [
            [
                'product_name' => 'Black Jacket',
                'product_details'    => 'Simple Jaket',
                'product_price'    => '2000',
                'product_category' => 1,
            ],
            [
                'product_name' => 'Red Jacket',
                'product_details'    => 'Simple Jaket',
                'product_price'    => '2000',
                'product_category' => 1,
            ],
            [
                'product_name' => 'Blue Jacket',
                'product_details'    => 'Small Jaket',
                'product_price'    => '600',
                'product_category' => 2,
            ],
            [
                'product_name' => 'Shirt Jacket',
                'product_details'    => 'Long Jaket',
                'product_price'    => '58',
                'product_category' => 2,
            ],
            [
                'product_name' => 'Pant Jacket',
                'product_details'    => 'Large Jaket',
                'product_price'    => '25',
                'product_category' => 1,
            ],
            [
                'product_name' => 'full Jacket',
                'product_details'    => 'Good Jaket',
                'product_price'    => '5000',
                'product_category' => 3,
            ],
            [
                'product_name' => 'Half Jacket',
                'product_details'    => 'good Jaket',
                'product_price'    => '600',
                'product_category' => 3,
            ]
        ];

        // // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);

        // // Using Query Builder

        foreach ($datas as $data) {

            $this->db->table('products')->insert($data);
        }
    }
}
