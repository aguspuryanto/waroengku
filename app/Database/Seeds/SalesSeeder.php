<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SalesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'invoice_number' => 'INV202301',
                'customer_id'    => 1,
                'total_amount'   => 150.75,
                'payment_status' => 'Paid',
                'sale_date'      => '2025-01-01',
            ],
            [
                'invoice_number' => 'INV202302',
                'customer_id'    => 2,
                'total_amount'   => 200.50,
                'payment_status' => 'Pending',
                'sale_date'      => '2025-01-02',
            ],
        ];

        $this->db->table('sales')->insertBatch($data);
    }
}
