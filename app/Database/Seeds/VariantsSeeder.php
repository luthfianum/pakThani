<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class VariantsSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        $id = 1;

        for ($i = 1; $i <= 21; $i++){
            $data[] =   [
                            'id'            => $id,
                            'name'          => '250gr',
                            'price'         => '8000',
                            'item_id'       => $i,
                        ];

            $data[] =   [
                            'id'            => $id+1,
                            'name'          => '250gr',
                            'price'         => '8000',
                            'item_id'       => $i,
                        ];
            $id += 2;
        }

        $this->db->table('variants_item')->insertBatch($data);
    }
}
