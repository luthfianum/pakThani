<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemsModel extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'items';
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

  public function getItemsByCategory(string $category_slug = NULL, int $limit = NULL)
  {
    $this->VariantsItemModel = new \App\Models\VariantsItemModel();
    $items = $this->db
    -> table('items')
    -> select('items.id, name, image, description, items.slug, categories.slug as category_slug')
    -> join('categories', 'items.category_id = categories.id')
    -> orderBy('id','RANDOM');
    if($category_slug !== NULL){
      $items = $items-> where('categories.slug', $category_slug);
    }
    if($limit !== NULL)
    {
      $items = $items->limit($limit);
    }
    $items = $items->get()
    ->getResult('array');

    $items = array_map(function ($items) {
      $items['variants_item'] = $this->VariantsItemModel->getVariantByItemId($items['id']);
      $items['url'] = base_url('/item/'.$items['slug']);
      return $items;
    }, $items);

    return $items;
  }

  public function getItemsBySearch(string $slug) {
    $items = $this->db
    -> table('items')
    -> select('items.id, name, image, description, items.slug, categories.slug as category_slug')
    -> join('categories', 'items.category_id = categories.id')
    ->like('items.slug', $slug)
    ->orlike('categories.slug', $slug)
    ->get()
    ->getResult('array');

    return $items;
  }

  public function getItem(string $slug)
  {
    $item = $this->db
    -> table('items')
    -> select('*')
    -> where('slug', $slug)
    ->get()
    ->getResult('array');

    return $item;
  }
}
