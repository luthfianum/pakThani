<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CartDetailsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'            => 1,
                'quantity'      => '2',
                'note'          => 'Cari yang baru ya bang',
                'cart_id'       => 1,
                'variant_id'    => 1
            ],
            [
                'id'            => 2,
                'quantity'      => '1',
                'note'          => '',
                'cart_id'       => 1,
                'variant_id'    => 3
            ],
            [
                'id'            => 3,
                'quantity'      => '2',
                'note'          => '',
                'cart_id'       => 2,
                'variant_id'    => 8
            ],
            [
                'id'            => 4,
                'quantity'      => '1',
                'note'          => '',
                'cart_id'       => 3,
                'variant_id'    => 19
            ]
        ];

        $this->db->table('cart_details')->insertBatch($data);
    }
}
