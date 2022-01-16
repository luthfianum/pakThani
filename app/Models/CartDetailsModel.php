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



    public function addItemToCart($cartID, $quantity, $variantID) {
        $item = [
            'cart_id' => $cartID,
            'variant_id'  => $variantID,
        ];

        $data = [
            'quantity'  => $quantity,
            'cart_id' => $cartID,
            'variant_id'  => $variantID
        ];

        
        $item_in_cart = $this->db
                            ->table("cart_details")
                            ->where($item)
                            ->select('quantity')
                            ->get()
                            ->getResult('array');
        
        if(empty($item_in_cart)) {
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
