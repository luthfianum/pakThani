<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class VariantsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'            => 1,
                'name'          => '250gr',
                'price'         => '8000',
                'item_id'       => 1,
            ],
            [
                'id'            => 2,
                'name'          => '500gr',
                'price'         => '15000',
                'item_id'       => 1,
            ],
            [
                'id'            => 3,
                'name'          => '500gr',
                'price'         => '10000',
                'item_id'       => 2,
            ],
            [
                'id'            => 4,
                'name'          => '1000gr',
                'price'         => '20000',
                'item_id'       => 2,
            ]
        ];

        $this->db->table('variants_item')->insertBatch($data);
    }
}
