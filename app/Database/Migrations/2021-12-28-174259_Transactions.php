<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transactions extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unasigned' => true,
                'auto_increment' => true
            ],
            'user_id' => [
                'type' => 'INT',
                'unasigned' => true,
            ],
            'address_id' => [
                'type' => 'INT',
                'unasigned' => true,
            ],
            'cart_id' => [
                'type' => 'INT',
                'unasigned' => true,
            ],
            'status_id' => [
                'type' => 'INT',
                'unasigned' => true,
            ],
            'delivery_cost' => [
                'type' => 'INT'
            ],
            'created_at' => [
                'type' => 'DATETIME'
            ],
            'updated_at' => [
                'type' => 'DATETIME'
            ],
            'deleted_at' => [
                'type' => 'DATETIME'
            ]
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->addForeignKey('address_id', 'addresses', 'id');
        $this->forge->addForeignKey('status_id', 'transaction_status', 'id');
        $this->forge->createTable('transactions');
    }

    public function down()
    {
        $this->forge->dropTable('transactions');
    }
}
