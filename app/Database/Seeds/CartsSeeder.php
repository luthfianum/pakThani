<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CartsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'        => 1,
                'user_id'   => 1,
                'is_active' => true
            ],
            [
                'id'        => 2,
                'user_id'   => 1,
                'is_active' => false
            ],
            [
                'id'        => 3,
                'user_id'   => 1,
                'is_active' => false
            ]
        ];

        $this->db->table('carts')->insertBatch($data);
    }
}
