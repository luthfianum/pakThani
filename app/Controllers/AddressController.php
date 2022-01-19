<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AddressController extends BaseController {
    public function addAddress() {
        $user_id = $this->session->get('id');

        if($user_id) {
            $data = [
                'user_id'        => $user_id,
                'kabupaten/kota' => $this->request->getVar('kabuoaten/kota') ?? "unknown",
                'kecamatan'      => $this->request->getVar('kecamatan') ?? "unknown",
                'kelurahan'      => $this->request->getVar('kelurahan') ?? "unknwon",
                'alamat'         => $this->request->getVar('alamat'),
                'note'           => $this->request->getVar('note') ?? "none",
                'is_active'      => true
            ];

            $this->AddressesModel->addAddress($data);

            $this->session->setFlashdata('msg', 'Address succesfully added.');
        } else {
            $this->session->setFlashdata('msg', 'Fail to add address.');
        }

        return redirect()->to(base_url() . '/checkout');
    }
}
