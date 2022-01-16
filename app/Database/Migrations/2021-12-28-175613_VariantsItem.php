<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class VariantsItem extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unasigned' => true,
                'auto_increment' => true
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'price' => [
                'type' => 'INT'
            ],
            'item_id' => [
                'type' => 'INT',
                'unasigned' => true,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'deleted_at DATETIME DEFAULT NULL'
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('item_id', 'items', 'id');
        $this->forge->createTable('variants_item');
    }

    public function down()
    {
        $this->forge->dropTable('variants_item');
    }
}
