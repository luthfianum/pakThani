<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransactionStatusSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'              => 1,
                'status'          => 'Berlangsung',
            ],
            [
                'id'              => 2,
                'status'          => 'Selesai',
            ],
        ];

        $this->db->table('transaction_status')->insertBatch($data);
    }
}
