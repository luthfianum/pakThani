<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransactionStatus extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unasigned' => true,
                'auto_increment' => true
            ],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
            'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
            'deleted_at DATETIME DEFAULT NULL'
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('transaction_status');
    }

    public function down()
    {
        $this->forge->dropTable('transaction_status');
    }
}
