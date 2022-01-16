<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'            => 1,
                'payment_type'  => 'COD (Bayar di tempat)',
            ],
        ];

        $this->db->table('payment_types')->insertBatch($data);
    }
}
