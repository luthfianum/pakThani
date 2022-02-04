<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransactionsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'                  => 1,
                'user_id'             => 1,
                'address_id'          => 1,
                'cart_id'             => 2,
                'status_id'           => 1, 
                'delivery_cost'       => 8000,
                'payment_type_id'     => 1,
            ],
            [
                'id'                  => 2,
                'user_id'             => 1,
                'address_id'          => 1,
                'cart_id'             => 3,
                'status_id'           => 2, 
                'delivery_cost'       => 8000,
                'payment_type_id'     => 1,
            ],
        ];

        $this->db->table('transactions')->insertBatch($data);
    }
}