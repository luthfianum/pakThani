<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ItemsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'            => 1,
                'name'          => 'Baby Jagung',
                'image'         => 'https://i.ibb.co/fSzsptW/baby-jagung.png',
                'description'   => '',
                'slug'          => 'baby-jagung',
                'category_id'   => 6
            ],
            [
                'id'            => 2,
                'name'          => 'Ubi Cilembu',
                'image'         => 'https://i.ibb.co/k29tZGx/ubi-cilembu.png',
                'description'   => '',
                'slug'          => 'ubi-cilembu',
                'category_id'   => 2
            ],
            [
                'id'            => 3,
                'name'          => 'Telur Puyuh',
                'image'         => 'https://i.ibb.co/P4by44B/telur-puyuh.png',
                'description'   => '',
                'slug'          => 'telur-puyuh',
                'category_id'   => 2
            ],
            [
                'id'            => 4,
                'name'          => 'Sereh',
                'image'         => 'https://i.ibb.co/6bj88rx/sereh.png',
                'description'   => '',
                'slug'          => 'sereh',
                'category_id'   => 10
            ],
            [
                'id'            => 5,
                'name'          => 'Lada Putih',
                'image'         => 'https://i.ibb.co/fQsmZbs/lada-putih.png',
                'description'   => '',
                'slug'          => 'lada-putih',
                'category_id'   => 10
            ],
            [
                'id'            => 6,
                'name'          => 'Labu Siam',
                'image'         => 'https://i.ibb.co/d4sjqzm/labu-siam.png',
                'description'   => '',
                'slug'          => 'labu-siam',
                'category_id'   => 6
            ],
            [
                'id'            => 7,
                'name'          => 'Kacang Panjang',
                'image'         => 'https://i.ibb.co/GJRjNfm/kacang-panjang.png',
                'description'   => '',
                'slug'          => 'kacang-panjang',
                'category_id'   => 6
            ],
            [
                'id'            => 8,
                'name'          => 'Buncis',
                'image'         => 'https://i.ibb.co/TH77Kcg/buncis.png',
                'description'   => '',
                'slug'          => 'buncis',
                'category_id'   => 6
            ],
            [
                'id'            => 9,
                'name'          => 'Brokoli',
                'image'         => 'https://i.ibb.co/MCy23km/brocoli.png',
                'description'   => '',
                'slug'          => 'brokoli',
                'category_id'   => 6
            ],
            [
                'id'            => 10,
                'name'          => 'Bawang Merah',
                'image'         => 'https://i.ibb.co/xJ1pys4/bawang-merah.png',
                'description'   => '',
                'slug'          => 'bawang-merah',
                'category_id'   => 10
            ],
            [
                'id'            => 11,
                'name'          => 'Bayam Merah',
                'image'         => 'https://i.ibb.co/bBW2hmP/bayam-merah.png',
                'description'   => '',
                'slug'          => 'bayam-merah',
                'category_id'   => 6
            ]
        ];

        $this->db->table('items')->insertBatch($data);
    }
}
