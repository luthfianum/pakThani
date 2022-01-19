<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AddressController extends BaseController
{
  public function updateActive($id)
  {
    $result = $this->AddressesModel->changeActiveAddress($id);
    if ($result == true) {
      $this->session->setFlashdata('msg', 'Alamat berhasil diubah!');
    }
    $this->session->setFlashdata('msg', 'Alamat gagal diubah!');
    return redirect()->to(base_url() . '/checkout');
  }
}
