<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ItemsSeeder extends Seeder
{
    public function run()
    {
        $data = [
            /// daging
            [
                'id'            => 1,
                'name'          => 'Dada Ayam Fillet',
                'image'         => 'https://i.ibb.co/rQ0Rjth/dada-ayam-fillet.png',
                'description'   => 'Dada ayam pilihan',
                'slug'          => 'dada-ayam-fillet',
                'category_id'   => 4
            ],
            [
                'id'            => 2,
                'name'          => 'Ikan Salmon Fillet',
                'image'         => 'https://i.ibb.co/Hnp2LkJ/ikan-salmon-fillet.png',
                'description'   => 'Selamat dari istri, berakhir disini',
                'slug'          => 'ikan-salmon-fillet',
                'category_id'   => 4
            ],
            [
                'id'            => 3,
                'name'          => 'Tenggiri Fillet',
                'image'         => 'https://i.ibb.co/kG6xg8j/tenggiri-fillet.png',
                'description'   => 'Diambil langsung dari nelayan lokal',
                'slug'          => 'tenggiri-fillet',
                'category_id'   => 4
            ],
            [
                'id'            => 4,
                'name'          => 'Tuna Fillet',
                'image'         => 'https://i.ibb.co/dgwStyh/tuna-fillet.png',
                'description'   => 'Dulu dia bertemu dengan Nemo',
                'slug'          => 'tuna-fillet',
                'category_id'   => 4
            ],
            [
                'id'            => 5,
                'name'          => 'Udang Segar',
                'image'         => 'https://i.ibb.co/JCRcsHJ/udang-segar.png',
                'description'   => 'Udang segar dari balik batu',
                'slug'          => 'udang-segar',
                'category_id'   => 4
            ],
            [
                'id'            => 6,
                'name'          => 'Ayam Utuh Potong',
                'image'         => 'https://i.ibb.co/GnJPtp6/ayam-utuh-potong.png',
                'description'   => 'Sepotong ayam sehat yang berakhir di tempat kami',
                'slug'          => 'ayam-utuh-potong',
                'category_id'   => 4
            ],
            [
                'id'            => 7,
                'name'          => 'Ceker Ayam',
                'image'         => 'https://i.ibb.co/GJtSQVz/ceker-ayam.png',
                'description'   => 'Ceker ayam pilihan dari pejantan terkuat',
                'slug'          => 'ceker-ayam',
                'category_id'   => 4
            ],
            /// rempah
            [
                'id'            => 8,
                'name'          => 'Bawang Putih',
                'image'         => 'https://i.ibb.co/82rFJgt/bawang-putih.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'bawang-putih',
                'category_id'   => 10
            ],
            [
                'id'            => 9,
                'name'          => 'Bumbu Ungkep',
                'image'         => 'https://i.ibb.co/c60yHwf/bumbu-ungkep.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'bumbu-ungkep',
                'category_id'   => 10
            ],
            [
                'id'            => 10,
                'name'          => 'Jahe Merah',
                'image'         => 'https://i.ibb.co/nL82bJB/jahe-merah.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'jahe-merah',
                'category_id'   => 10
            ],
            [
                'id'            => 11,
                'name'          => 'Jahe',
                'image'         => 'https://i.ibb.co/ScCJzgD/jahe.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'jahe',
                'category_id'   => 10
            ],
            [
                'id'            => 12,
                'name'          => 'Kencur',
                'image'         => 'https://i.ibb.co/WxbNzJL/kencur.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'kencur',
                'category_id'   => 10
            ],
            [
                'id'            => 13,
                'name'          => 'kunyit',
                'image'         => 'https://i.ibb.co/KNBZqVW/kunyit.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'kunyit',
                'category_id'   => 10
            ],
            [
                'id'            => 14,
                'name'          => 'Lada Putih',
                'image'         => 'https://i.ibb.co/MgYvxQs/lada-putih.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'lada-putih',
                'category_id'   => 10
            ],
            [
                'id'            => 15,
                'name'          => 'Bawang Bombay',
                'image'         => 'https://i.ibb.co/JBHZJMw/bawang-bombay.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'bawang-bombay',
                'category_id'   => 10
            ],
            ///sayuran
            [
                'id'            => 16,
                'name'          => 'Baby Jagung',
                'image'         => 'https://i.ibb.co/fSzsptW/baby-jagung.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'baby-jagung',
                'category_id'   => 6
            ],
            [
                'id'            => 17,
                'name'          => 'Labu Siam',
                'image'         => 'https://i.ibb.co/d4sjqzm/labu-siam.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'labu-siam',
                'category_id'   => 6
            ],
            [
                'id'            => 18,
                'name'          => 'Kacang Panjang',
                'image'         => 'https://i.ibb.co/GJRjNfm/kacang-panjang.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'kacang-panjang',
                'category_id'   => 6
            ],
            [
                'id'            => 19,
                'name'          => 'Buncis',
                'image'         => 'https://i.ibb.co/TH77Kcg/buncis.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'buncis',
                'category_id'   => 6
            ],
            [
                'id'            => 20,
                'name'          => 'Brokoli',
                'image'         => 'https://i.ibb.co/MCy23km/brocoli.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'brokoli',
                'category_id'   => 6
            ],
            [
                'id'            => 21,
                'name'          => 'Bayam Merah',
                'image'         => 'https://i.ibb.co/bBW2hmP/bayam-merah.png',
                'description'   => 'Deskripsi letaknya disini',
                'slug'          => 'bayam-merah',
                'category_id'   => 6
            ]
        ];

        $this->db->table('items')->insertBatch($data);
    }
}








