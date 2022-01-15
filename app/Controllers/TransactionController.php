<?php

namespace App\Controllers;

class TransactionController extends BaseController
{
  public function checkoutPage()
  {
    $session = session();
    $userId = $session->get('id');
    $result = [];

    if ($userId) {
      $result['addresses'] = $this->AddressesModel->getByUserId($userId) ?: [];
      $result['cart'] = $this->CartsModel->getByUserId($userId);
      return view('checkout', $result);
    } else {
      return redirect()->to(base_url() . '/login');
    }
  }
}
