<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CartDetails extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unasigned' => true,
                'auto_increment' => true
            ],
            'quantity' => [
                'type' => 'INT',
            ],
            'note' =>[
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'cart_id' => [
                'type' => 'INT',
                'unasigned' => true,
            ],
            'variant_id' => [
                'type' => 'INT',
                'unasigned' => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'deleted_at DATETIME DEFAULT NULL'
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('cart_id', 'carts', 'id');
        $this->forge->addForeignKey('variant_id', 'variants_item', 'id');
        $this->forge->createTable('cart_details');
    }

    public function down()
    {
        $this->forge->dropTable('cart_details');
    }
}
