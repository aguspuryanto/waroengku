<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Purchases extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'purchase_number' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],
            'supplier_id' => [
                'type'       => 'INT',
                'unsigned'   => true,
            ],
            'total_amount' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'purchase_date' => [
                'type' => 'DATE',
            ],
            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['Pending', 'Completed'],
                'default'    => 'Pending',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        // $this->forge->addForeignKey('supplier_id', 'suppliers', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('purchases');
    }

    public function down()
    {
        $this->forge->dropTable('purchases');
    }
}
