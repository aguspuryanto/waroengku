<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Product extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'        => 'Product A',
                'sku'         => 'PROD-A',
                'description' => 'Description for Product A',
                'price'       => 50.00,
                'stock'       => 100,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Product B',
                'sku'         => 'PROD-B',
                'description' => 'Description for Product B',
                'price'       => 75.50,
                'stock'       => 200,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Product C',
                'sku'         => 'PROD-C',
                'description' => 'Description for Product C',
                'price'       => 120.99,
                'stock'       => 150,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        // Insert batch data into products table
        $this->db->table('products')->insertBatch($data);
    }
}
