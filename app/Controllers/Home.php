<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    $session = session();
    $result = [];
    $result['category'] = $this->CategoriesModel->getAll();
    $result['items']['random'] = $this->ItemsModel->getItemsByCategory(NULL, 6);
    $result['slides'] = $this->SlidesModel->getAllSlides();

    foreach ($result['category'] as $category) {
      $result['items'][strtolower($category['name'])] = $this->ItemsModel->getItemsByCategory($category['slug'], 6);
    }

    if ($session->get('id')) {
      $result['user'] = $this->UserModel->getById($session->get('id'));
      $result['user']['cart'] = $this->CartsModel->getByUserId($session->get('id'));
    }

    return view('home', $result);
  }
}
