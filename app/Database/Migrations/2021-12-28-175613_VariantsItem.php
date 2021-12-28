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
            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'item_id' => [
                'type' => 'INT',
                'unasigned' => true,
            ],
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
