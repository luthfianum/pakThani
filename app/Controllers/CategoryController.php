<?php

namespace App\Controllers;

class CategoryController extends BaseController
{
  
  public function index($slug)
  {
    $userId = $this->session->get('id');
    $result = [];
    $result['category'] = $this->CategoriesModel->getAll();
    $result['items'] = $this->ItemsModel->getItemsByCategory($slug);

    if($userId){
      $result['user'] = $this->UserModel->getById($userId);
      $result['user']['cart'] = $this->CartsModel->getByUserId($userId);
    }

    return view('category', $result);
  }
}
