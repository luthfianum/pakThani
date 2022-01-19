<?php

namespace App\Controllers;

class HomeController extends BaseController
{
  public function index()
  {
    $userId = $this->session->get('id');
    $result = [];
    $result['category'] = $this->CategoriesModel->getAll();
    $result['items']['random'] = $this->ItemsModel->getItemsByCategory(NULL, 6);
    $result['slides'] = $this->SlidesModel->getAllSlides();

    foreach ($result['category'] as $category) {
      $result['items'][strtolower($category['name'])] = $this->ItemsModel->getItemsByCategory($category['slug'], 6);
    }

    if ($userId) {
      $result['user'] = $this->UserModel->getById($userId);
      $result['user']['cart'] = $this->CartsModel->getByUserId($userId);
    }

    echo view('Home', $result);
  }
}
