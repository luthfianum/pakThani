<?php

namespace App\Controllers;
use CodeIgniter\Controller;

class DetailitemController extends BaseController {
    public function index($slug) {
        $session = session();
        $result = [];

        $result['category'] = $this->CategoriesModel->getAll();
        $result['item'] = $this->ItemsModel->getItem($slug)[0];
        $result['item']['variant'] = $this->VariantsItemModel->getVariantByItemId($result['item']["id"]);

        if($session->get('id')){
            $result['user'] = $this->UserModel->getById($session->get('id'));
            $result['user']['cart'] = $this->CartsModel->getByUserId($session->get('id'));
        }

        return view('detail_item', $result);
    }
}

?>