<?php

namespace App\Models;

use CodeIgniter\Model;

class CartDetailsModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'cart_details';
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

    public function addItemToCart($cart_id, $quantity, $variant_id)
    {
        $item = [
            'cart_id' => $cart_id,
            'variant_id'  => $variant_id,
        ];

        $data = [
            'quantity'  => $quantity,
            'cart_id' => $cart_id,
            'variant_id'  => $variant_id
        ];


        $item_in_cart = $this->db
            ->table("cart_details")
            ->where($item)
            ->select('quantity')
            ->get()
            ->getResult('array');

        if ($data['quantity'] > 0) {
            if (empty($item_in_cart)) {
                $this->db
                    ->table("cart_details")
                    ->insert($data);
            } else {
                $quantity += $item_in_cart[0]['quantity'];

                $this->db
                    ->table("cart_details")
                    ->set('quantity', $quantity)
                    ->where($item)
                    ->update();
            }
        }
    }

    public function checkItemInCart(int $cart_id, int $quantity, int $variant_id)
    {
        if ($quantity == 0) {
            $this->db
                ->table('cart_details')
                ->where('cart_id', $cart_id)
                ->where('variant_id', $variant_id)
                ->delete();
        } else {
            $this->db
                ->table('cart_details')
                ->where('cart_id', $cart_id)
                ->where('variant_id', $variant_id)
                ->set('quantity', $quantity)
                ->update();
        }
    }
}
