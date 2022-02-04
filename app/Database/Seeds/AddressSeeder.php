<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class AddressSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'user_id' => 1,
                'kabupaten/kota' => 'Banda Aceh',
                'kecamatan' => 'Banda Raya',
                'kelurahan' => 'Lam Lagang',
                'alamat' => 'Jl. Tgk Musa No. 34',
                'note' => 'Rumah cat biru',
                'is_active' => true,
            ]
        ];

        $this->db->table('addresses')->insertBatch($data);
    }
}
