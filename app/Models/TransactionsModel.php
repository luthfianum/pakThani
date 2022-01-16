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

  public function createTransaction(int $userId, int $cartId, int  $addressId, int $paymentTypeId = 1)
  {
    $data = [
      'user_id' => $userId,
      'address_id' => $addressId,
      'cart_id' => $cartId,
      'status_id' => 1,
      'delivery_cost' => 5000,
      'transaction_type_id' => $paymentTypeId,
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
      ->set('user_id', $userId, false)
      ->insert();
    return $this->db
      ->table("transactions")
      ->insert($data);
  }

  public function getByUserId($userId)
  {
    $result = $this->db
      ->table('transactions')
      ->where('transactions.user_id', $userId)
      ->join('carts', 'carts.id = transactions.cart_id')
      ->join('transaction_status', 'transaction_status.id = transactions.status_id')
      ->get()
      ->getResult('array');

    return $result;
  }
}
