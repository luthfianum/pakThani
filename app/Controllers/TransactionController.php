<?php

namespace App\Controllers;

class TransactionController extends BaseController
{
  public function checkoutPage()
  {
    $userId = $this->session->get('id');
    $result = [];

    if ($userId) {
      $result['addresses'] = $this->AddressesModel->getByUserId($userId) ?: [];
      $result['addresses']['active'] = $this->AddressesModel->getByUserId($userId, true) ?: [];
      $result['cart'] = $this->CartsModel->getByUserId($userId);
      $result['payment_method'] = $this->PaymentTypesModel->getAll();
      $result['user'] = $this->UserModel->getById($userId);
      $result['user']['cart'] = $this->CartsModel->getByUserId($userId);
      return view('checkout', $result);
    } else {
      return redirect()->to(base_url() . '/login');
    }
  }

  public function checkout()
  {
    $userId = $this->session->get('id');

    if ($userId) {
      $this->db->transBegin();
      $user = $this->UserModel->getDetailsById($userId);
      $cartId = $user['cart']['id'];
      $addressesId = $user['address']['id'];
      $transaction = $this->TransactionsModel->createTransaction($userId, $cartId, $addressesId);
      
      if ($this->db->transStatus() === false) {
        $this->db->transRollback();
        $this->session->setFlashdata('msg', 'Transaksi Gagal Dibuat');
      } else {
        $this->db->transCommit();
        $this->session->setFlashdata('msg', 'Transaksi Berhasil Dibuat');
      }
      return redirect()->to(base_url() . '/transaction');
    } else {
      return redirect()->to(base_url() . '/login');
    }
  }

  public function listTransactionPage()
  {
    $userId = $this->session->get('id');
    $result = [];
    if ($userId) {
      $result['transactions'] = $this->TransactionsModel->getByUserId($userId);
      $result['user'] = $this->UserModel->getById($userId);
      $result['user']['cart'] = $this->CartsModel->getByUserId($userId);
      foreach($result['transactions'] as $i=>$transaction){
        $addressId = $result['transactions'][$i]['address_id'];
        $cartId = $result['transactions'][$i]['cart_id'];
        $result['transactions'][$i]['address'] = $this->AddressesModel->find($addressId);
        $result['transactions'][$i]['cart'] = $this->CartsModel->getDetailsById($cartId);
      }
      
      return view('list_transaksi', $result);
    } else {
      return redirect()->to(base_url() . '/login');
    }
  }
}
