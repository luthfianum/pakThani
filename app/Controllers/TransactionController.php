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
      $result['payment_method'] = $this->PaymentTypesModel->getAll();
      $result['user'] = $this->UserModel->getById($session->get('id'));
      $result['user']['cart'] = $this->CartsModel->getByUserId($session->get('id'));
      return view('checkout', $result);
    } else {
      return redirect()->to(base_url() . '/login');
    }
  }

  public function checkout()
  {
    $session = session();
    $userId = $session->get('id');

    if ($userId) {
      $this->db->transBegin();
      $paymentTypeId = $this->request->getVar('paymentTypeId', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
      $user = $this->UserModel->getDetailsById($userId);
      $cartId = $user['cart']['id'];
      $addressesId = $user['address']['id'];
      $transaction = $this->TransactionsModel->createTransaction($userId, $cartId, $addressesId, $paymentTypeId);
      
      if ($this->db->transStatus() === false) {
        $this->db->transRollback();
        $session->setFlashdata('msg', 'Transaksi Gagal Dibuat');
      } else {
        $this->db->transCommit();
        $session->setFlashdata('msg', 'Transaksi Berhasil Dibuat');
      }
      return redirect()->to(base_url() . '/transaction');
    } else {
      return redirect()->to(base_url() . '/login');
    }
  }

  public function listTransactionPage()
  {
    $session = session();
    $userId = $session->get('id');
    $result = [];
    if ($userId) {
      $result['transactions'] = $this->TransactionsModel->getByUserId($userId);
      $result['user'] = $this->UserModel->getById($session->get('id'));
      $result['user']['cart'] = $this->CartsModel->getByUserId($session->get('id'));
      foreach($result['transactions'] as $i=>$transaction){
        $addressId = $result['transactions'][$i]['address_id'];
        $cartId = $result['transactions'][$i]['cart_id'];
        $result['transactions'][$i]['address'] = $this->AddressesModel->find($addressId);
        $result['transactions'][$i]['cart'] = $this->CartsModel->getDetailsById($cartId);
      }
      dd($result);
      return view('list_transaksi', $result);
    } else {
      return redirect()->to(base_url() . '/login');
    }
  }
}
