<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id'        =>  1,
                'category'  => 'Terlaris',
                'icon'      => 'https://i.ibb.co/JnBrJHL/Bookmark.png',
                'slug'      => 'terlaris',
            ],
            [
                'id'        =>  2,
                'category'  => 'Organik',
                'icon'      => 'https://i.ibb.co/x5PxvYy/Natural-Food.png',
                'slug'      => 'organik',
            ],
            [
                'id'        =>  3,
                'category'  => 'Fish',
                'icon'      => 'https://i.ibb.co/0QDYc73/Sashimi.png',
                'slug'      => 'fish',
            ],
            [
                'id'        =>  4,
                'category'  => 'Daging',
                'icon'      => 'https://i.ibb.co/Lx5zTNN/Thanksgiving.png',
                'slug'      => 'daging',
            ],
            [
                'id'        =>  5,
                'category'  => 'Bread',
                'icon'      => 'https://i.ibb.co/9gMP7Kh/Bread.png',
                'slug'      => 'bread',
            ],
            [
                'id'        =>  6,
                'category'  => 'Sayuran',
                'icon'      => 'https://i.ibb.co/mqh0Rf3/Group-Of-Vegetables.png',
                'slug'      => 'sayuran',
            ],
            [
                'id'        =>  7,
                'category'  => 'Snacks',
                'icon'      => 'https://i.ibb.co/2FwTbjr/Potato-Chips.png',
                'slug'      => 'snack',
            ],
            [
                'id'        =>  8,
                'category'  => 'Buah',
                'icon'      => 'https://i.ibb.co/rMMTBd4/Group-Of-Fruits.png',
                'slug'      => 'buah',
            ],
            [
                'id'        =>  9,
                'category'  => 'Promo',
                'icon'      => 'https://i.ibb.co/ss2nfcr/Discount.png',
                'slug'      => 'promo',
            ],
            [
                'id'        =>  10,
                'category'  => 'Rempah',
                'icon'      => 'https://i.ibb.co/C2V1cMv/Garlic.png',
                'slug'      => 'rempah',
            ],
        ];

        $this->db->table('categories')->insertBatch($data);
    }
}
