<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Purchases extends Seeder
{
    public function run()
    {
        $data = [
            [
                'purchase_number' => 'PO20250101',
                'supplier_id'     => 1,
                'total_amount'    => 10000.00,
                'purchase_date'   => '2025-01-01',
                'status'          => 'Completed',
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
            ],
            [
                'purchase_number' => 'PO20250102',
                'supplier_id'     => 2,
                'total_amount'    => 15000.50,
                'purchase_date'   => '2025-01-02',
                'status'          => 'Pending',
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
            ],
            [
                'purchase_number' => 'PO20250103',
                'supplier_id'     => 3,
                'total_amount'    => 5000.75,
                'purchase_date'   => '2025-01-03',
                'status'          => 'Completed',
                'created_at'      => date('Y-m-d H:i:s'),
                'updated_at'      => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('purchases')->insertBatch($data);
    }
}
