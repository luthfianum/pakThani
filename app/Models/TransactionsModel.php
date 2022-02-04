<?php

namespace App\Models;

use CodeIgniter\Model;

class TransactionsModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'transactions';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = true;
  protected $protectFields    = true;
  protected $allowedFields    = [];

  // Dates
  protected $useTimestamps = true;
  protected $dateFormat    = 'datetime';
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';

  // Validation
  protected $validationRules      = [];
  protected $validationMessages   = [];
  protected $skipValidation       = false;
  protected $cleanValidationRules = true;

  // Callbacks
  protected $allowCallbacks = true;
  protected $beforeInsert   = [];
  protected $afterInsert    = [];
  protected $beforeUpdate   = [];
  protected $afterUpdate    = [];
  protected $beforeFind     = [];
  protected $afterFind      = [];
  protected $beforeDelete   = [];
  protected $afterDelete    = [];

  public function createTransaction(int $user_id, int $cart_id, int  $address_id, int $paymentType_id = 1) {
    $data = [
      'user_id' => $user_id,
      'address_id' => $address_id,
      'cart_id' => $cart_id,
      'status_id' => 1,
      'delivery_cost' => 5000,
      'payment_type_id' => $paymentType_id,
    ];

    // change all cart is_active to false
    $this->db
        ->table('carts')
        ->set('is_active', false)
        ->update();

    // make a new carts
    $this->db
        ->table('carts')
        ->set('is_active', true, false)
        ->set('user_id', $user_id, false)
        ->insert();

    return $this->db
                ->table("transactions")
                ->insert($data);
  }

  public function getByUserId($user_id) {
    $result = $this->db
            ->table('transactions')
            ->select('transactions.id as id, address_id, cart_id, delivery_cost, transactions.created_at, status, payment_type')
            ->where('transactions.user_id', $user_id)
            ->join('carts', 'carts.id = transactions.cart_id')
            ->join('transaction_status', 'transaction_status.id = transactions.status_id')
            ->join('payment_types', 'payment_types.id = transactions.payment_type_id')
            ->get()
            ->getResult('array');

    return $result;
  }
}
