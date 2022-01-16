<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransactionStatusSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'            => 1,
                'status'          => 'Disiapkan',
            ],
            [
                'id'            => 2,
                'status'          => 'Dikirim',
            ],
            [
                'id'            => 3,
                'status'          => 'Selesai',
            ],
        ];

        $this->db->table('transaction_status')->insertBatch($data);
    }
}
