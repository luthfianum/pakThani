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
                'img'           => 'https://i.ibb.co/pdBwFSV/cod.png'
            ],
            [
                'id'            => 2,
                'payment_type'  => 'OVO Payment',
                'img'           => 'https://i.ibb.co/9b1zm72/image-removebg-preview-6.png'
            ],
        ];

        $this->db->table('payment_types')->insertBatch($data);
    }
}
