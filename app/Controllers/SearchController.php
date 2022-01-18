<?php

namespace App\Controllers;

class SearchController extends BaseController
{
  
  public function index($slug)
  {
    $session = session();
    $result = [];
    $result['category'] = $this->CategoriesModel->getAll();
    $result['items'] = $this->ItemsModel->getItemsBySearch($slug);

    if($session->get('id')){
      $result['user'] = $this->UserModel->getById($session->get('id'));
      $result['user']['cart'] = $this->CartsModel->getByUserId($session->get('id'));
    }

    return view('search', $result);
  }
}
