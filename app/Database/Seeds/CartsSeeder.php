<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CartsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id'        => 1,
            'user_id'   => 1,
            'is_active' => true
        ];

        $this->db->table('carts')->insert($data);
    }
}
