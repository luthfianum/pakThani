<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'id'            => 1,
            'username'      => 'admin',
            'email'         => 'admin@pakthani.com',
            'password'      => password_hash('1234567', PASSWORD_DEFAULT),
            'is_verified'   => True,
            'role'          => False
        ];

        $this->db->table('users')->insert($data);
    }
}
