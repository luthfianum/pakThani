<?php

namespace App\Controllers;

class DetailitemController extends BaseController {
    public function index($slug) {
        $userId = $this->session->get('id');
        $result = [];

        $result['category'] = $this->CategoriesModel->getAll();
        $result['item'] = $this->ItemsModel->getItem($slug)[0];
        $result['item']['variant'] = $this->VariantsItemModel->getVariantByItemId($result['item']["id"]);

        if($userId){
            $result['user'] = $this->UserModel->getById($userId);
            $result['user']['cart'] = $this->CartsModel->getByUserId($userId);
        }

        return view('detail_item', $result);
    }
}

?>