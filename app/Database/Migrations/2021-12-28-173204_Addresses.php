<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Addresses extends Migration
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
            'kabupaten/kota'=> [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'kelurahan' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'alamat' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'note' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true
            ],
            'is_active' => [
                'type' => 'BOOLEAN',
                'null' => true,
                'default' => true
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'deleted_at DATETIME DEFAULT NULL'
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('user_id', 'users', 'id');
        $this->forge->createTable('addresses');
    }

    public function down()
    {
        $this->forge->dropTable('addresses');
    }
}
