<?php

namespace App\Models;

use CodeIgniter\Model;

class AddressesModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'addresses';
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

  public function getByUserId(int $userId, bool $is_active = NULL)
  {
    $addresses = $this->db
      ->table('addresses')
      ->select('')
      ->where('user_id', $userId);
    if (!is_null($is_active)) {
      $addresses->where('is_active', $is_active);
    }
    $result = $addresses->get()
      ->getResult('array');
    return $result;
  }

  public function addAddress($data)
  {
    $this->db->transBegin();
    $this->db
      ->table('addresses')
      ->where('user_id', $data['user_id'])
      ->set('is_active', 0)
      ->update();

    $address = $this->db
      ->table('addresses')
      ->insert($data);

    if ($this->db->transStatus() === false) {
      $this->db->transRollback();
      return null;
    } else {
      $this->db->transCommit();
      return $address;
    }

    return $address;
  }

  public function changeActiveAddress(int $user_id, int $alamatId)
  {
    $this->db->transBegin();

    $this->db
      ->table('addresses')
      ->where('user_id', $user_id)
      ->set('is_active', 0)
      ->update();
    $this->db
      ->table('addresses')
      ->where('id', $alamatId)
      ->where('user_id', $user_id)
      ->set('is_active', 1)
      ->update();

    if ($this->db->transStatus() === false) {
      $this->db->transRollback();
      return false;
    } else {
      $this->db->transCommit();
      return true;
    }
  }
}
