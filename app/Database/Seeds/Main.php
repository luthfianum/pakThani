<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Main extends Seeder
{
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('CategoriesSeeder');
        $this->call('ItemsSeeder');
        $this->call('CartsSeeder');
        $this->call('CartDetailsSeeder');
    }
}
