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
        $this->call('VariantsSeeder');
        $this->call('CartDetailsSeeder');
        $this->call('AddressSeeder');
        $this->call('PaymentTypeSeeder');
        $this->call('TransactionStatusSeeder');
        $this->call('TransactionsSeeder');
    }
}
