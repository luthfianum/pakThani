<?php

namespace App\Controllers;

use CodeIgniter\HTTP\IncomingRequest;


class CartController extends BaseController {
    public function index() {
        $session = session();
        
        $cartID = $this->CartsModel->getIdCartActiveByUserId($session->get('id'));
        $quantity = $this->request->getVar('quantity', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $variantID = $this->request->getVar('variantID', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        
        $this->CartDetailsModel->addItemToCart($cartID, $quantity, $variantID);

        if($session->get('id')){            
            # $session->setFlashdata('msg', 'Pemesanan Berhasil');
            
            #ke home dlu, nanti klo udh jdi pageny perlu dirombak lagi
            return redirect()->to('/home'); 
        }        
    }
}

