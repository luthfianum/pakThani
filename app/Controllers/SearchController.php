<?php

namespace App\Controllers;

class SearchController extends BaseController
{
  
  public function index($slug)
  {
    $userId = $this->session->get('id');
    $result = [];
    $result['category'] = $this->CategoriesModel->getAll();
    $result['items'] = $this->ItemsModel->getItemsBySearch($slug);
    
    foreach ($result['items'] as $i=>$item ) {
      $result['items'][$i]['variant'] = $this->VariantsItemModel->getVariantByItemId($item['id']);
    }

    if($userId){
      $result['user'] = $this->UserModel->getById($userId);
      $result['user']['cart'] = $this->CartsModel->getByUserId($userId);
    }

    return view('search', $result);
  }
}
