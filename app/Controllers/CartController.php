<?php

namespace App\Controllers;

use CodeIgniter\HTTP\IncomingRequest;


class CartController extends BaseController
{
    public function index()
    {
        $userId = $this->session->get('id');
        if ($userId) {
            $cartID = $this->CartsModel->getIdCartActiveByUserId($userId);
            $quantity = $this->request->getVar('quantity', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $variantID = $this->request->getVar('variantID', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

            $this->CartDetailsModel->addItemToCart($cartID, $quantity, $variantID);
            $this->session->setFlashdata('msg', 'Pemesanan Berhasil');

            return redirect()->to(previous_url(true));
        } else {
            return redirect()->to(base_url() . '/login');
        }
    }
}
