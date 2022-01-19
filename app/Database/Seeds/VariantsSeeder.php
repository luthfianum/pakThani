<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class VariantsSeeder extends Seeder
{
    public function run()
    {
        $data = [];
        $id = 1;

        for ($i = 1; $i <= 27; $i++){
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

        /*$price = ['30000', '27000', '25000', '22000', '20000', '17000', '15000', '12000', '10000', '8000', '5000'];
        $name = ['250gr', '100gr', '1kg', '750gr', '500gr'];

        for ($i = 1; $i <= 27; $i++){
            $data[] =   [
                            'id'            => $id,
                            'name'          => $name[array_rand($name)],
                            'price'         => $price[array_rand($price)],
                            'item_id'       => $i,
                        ];

            $data[] =   [
                            'id'            => $id+1,
                            'name'          => $name[array_rand($name)],
                            'price'         => $price[array_rand($price)],
                            'item_id'       => $i,
                        ];

            $id += 2;
        }*/

        $this->db->table('variants_item')->insertBatch($data);
    }
}
