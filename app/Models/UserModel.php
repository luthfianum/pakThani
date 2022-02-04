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

  public function getByID(int $user_id) {
    $user = $this->db
                ->table('users')
                ->select('email, username, no_telp, is_verified, role')
                ->where('id', $user_id)
                ->get()
                ->getResult('array')[0];
    
    return $user;
  }

  public function changePassword(int $user_id, $new_password) {
    $this->db
        ->table('users')
        ->where('id', $user_id)
        ->set('password', $new_password)
        ->update();
  }

  public function getVerifiedById($user_id) {
    $verified = $this->db
                    ->table('users')
                    ->select('is_verified')
                    ->where('id', $user_id)
                    ->get()
                    ->getResult('array')[0];

    return $verified;
  }

  public function getDetailsById($user_id) {
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

  public function getRules() {
    $rules = [
      'username'        => 'required|min_length[2]|max_length[50]',
      'email'           => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
      'password'        => 'required|min_length[4]|max_length[50]',
      'confirmpassword' => 'matches[password]'
    ];

    return $rules;
  }

  public function encryptID($id) {
    $encryption_iv = '13112000qwerplmo';
    $encryption_key = "PakThani";
    $ciphering = "AES-128-CTR";
    $iv_length = openssl_cipher_iv_length($ciphering);
    $encryption = openssl_encrypt(strval($id), $ciphering, $encryption_key, 0, $encryption_iv);

    return $encryption;
  }

  public function decryptID($id) {
    $encryption_iv = '13112000qwerplmo';
    $encryption_key = "PakThani";
    $ciphering = "AES-128-CTR";
    $id_string = openssl_decrypt($id, $ciphering, $encryption_key, 0, $encryption_iv);

    return $id_string;
  }
}
