<?php
// php spark make:seeder UserSeeder
// php spark db:seed UserSeeder

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username' => 'admin',
                'email'    => 'admin@example.com',
                'password' => password_hash('admin123', PASSWORD_BCRYPT),
            ],
            [
                'username' => 'user1',
                'email'    => 'user1@example.com',
                'password' => password_hash('password123', PASSWORD_BCRYPT),
            ],
        ];

        // Insert data into users table
        $this->db->table('users')->insertBatch($data);
    }
}
