<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'users';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = true;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = true;
  protected $protectFields    = true;
  protected $allowedFields    = [
    'username',
    'email',
    'password',
  ];

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

  public function accountVerified(int $user_id) {
    $this->db
    ->table('users')
    ->where('id', $user_id)
    ->set('is_verified', 1)
    ->update();
  }

  public function getByID(int $user_id)
  {
    $user = $this->db
      ->table('users')
      ->select('email, username, no_telp, is_verified, role')
      ->where('id', $user_id)
      ->get()
      ->getResult('array')[0];
    
    return $user;
  }

  public function getDetailsById($user_id)
  {
    $this->AddressesModel = new \App\Models\AddressesModel();
    $this->CartsModel = new \App\Models\CartsModel();
    $user = $this->db
      ->table('users')
      ->select('email, username, no_telp, is_verified, role')
      ->where('id', $user_id)
      ->get()
      ->getResult('array')[0];
    $user['address'] = $this->AddressesModel->getByUserId($user_id, true)[0];
    $user['cart'] = $this->CartsModel->getIdCartActiveByUserId($user_id);

    return $user;
  }
}
