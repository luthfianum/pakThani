<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PaymentTypes extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id' => [
        'type' => 'INT',
        'unasigned' => true,
        'auto_increment' => true
      ],
      'payment_type' => [
        'type' => 'VARCHAR',
        'constraint' => 255
      ],
      'img' => [
        'type' => 'VARCHAR',
        'constraint' => 255
      ],
      'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
      'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
      'deleted_at DATETIME DEFAULT NULL'
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('payment_types');
  }

  public function down()
  {
    $this->forge->dropTable('payment_types');
  }
}
