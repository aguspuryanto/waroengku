<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SuppliersSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'    => 'Supplier A',
                'email'   => 'supplierA@example.com',
                'phone'   => '081234567890',
                'address' => 'Jl. Mawar No. 1, Jakarta',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'Supplier B',
                'email'   => 'supplierB@example.com',
                'phone'   => '081298765432',
                'address' => 'Jl. Melati No. 2, Bandung',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name'    => 'Supplier C',
                'email'   => 'supplierC@example.com',
                'phone'   => '081212345678',
                'address' => 'Jl. Anggrek No. 3, Surabaya',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('suppliers')->insertBatch($data);
    }
}
