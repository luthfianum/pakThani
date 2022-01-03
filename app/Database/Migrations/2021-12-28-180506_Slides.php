<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Slides extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unasigned' => true,
                'auto_increment' => true
            ],
            'image' => [
                'type' => 'INT',
            ],
            'slogan' =>[
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'redirect_link' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'is_active' => [
                'type' => 'BOOLEAN',
                'default' => true
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
        $this->forge->createTable('slides');
    }

    public function down()
    {
        $this->forge->dropTable('slides');
    }
}
