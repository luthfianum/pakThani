<?php

namespace App\Models;

use CodeIgniter\Model;

class CartsModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'carts';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = true;
  protected $protectFields    = true;
  protected $allowedFields    = ['user_id', 'is_active'];

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

  public function getByUserId(int $user_id)
  {
    $cart_total = 0; 
    $cart = $this->db
      ->table('carts')
      ->select('id,user_id,is_active')
      ->where(['user_id' => $user_id, 'is_active' => true])
      ->get()
      ->getResult('array')[0];

    $cart["cartDetails"] = $this->db
      ->table('cart_details')
      ->select('items.name as item_name, variants_item.name as variant, cart_details.quantity, cart_details.note, items.image, variants_item.price, items.description, items.slug')
      ->where('cart_id', $cart['id'])
      ->join('variants_item', 'cart_details.variant_id = variants_item.id')
      ->join('items', 'variants_item.item_id = items.id')
      ->get()
      ->getResult('array');
    
    foreach ($cart["cartDetails"] as $details) {
      $cart_total += $details['price'] * $details['quantity'];
    }
    $cart['total'] = $cart_total;
    return $cart;
  }

  public function getIdCartActiveByUserId($user_id) {
    $cart = $this->db
      ->table('carts')
      ->select('id')
      ->where(['user_id' => $user_id, 'is_active' => true])
      ->get()
      ->getResult('array')[0];

    return $cart;
  }

  public function getCartById($cart_Id) {
    $cart = $this->db
      ->table('carts')
      ->select()
      ->join('transactions', 'carts.id = transactions.cart_id')
      ->get()
      ->getResult('array');

    return $cart;
}
  
}
