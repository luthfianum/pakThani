<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriesModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'categories';
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

  public function getAll() {
    $categories = $this->db
                      ->table('categories')
                      ->select('id,category as name, icon, slug')
                      ->get()
                      ->getResult('array');

    $categories = array_map(
      function ($category) {
        $category['url'] = base_url('/category/' . $category['slug']);
        
        return $category;
      }, $categories
    );

    return $categories;
  }
}
