<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\CartsModel;

class SignUpController extends Controller {  
    public function index() {
        helper(['form']);
        $data = [ 
            'regist' => false
        ];
        echo view('register', $data);
    }

    public function verification($id) {
        helper(['form']);
        
        $encryption_iv = '13112000qwerplmo';
        $encryption_key = "PakThani";
        $ciphering = "AES-128-CTR";
        $id_string = openssl_decrypt($id, $ciphering, $encryption_key, 0, $encryption_iv);
        $id_int = (int)$id_string;

        $userModel = new UserModel();
        $isVerified = $userModel->getVerifiedById($id_int);

        if( $isVerified['is_verified'] == 1 ) {
            $data = [
                'text' => "This Account has already been activated!",
            ];

            echo view('success', $data);
        } else {
            $data = [
                'user_id' => $id_int
            ];

            $cart = new CartsModel();
            $userModel->accountVerified($id_int);
            $cart->insert($data);

            echo view('verification_succeed');
        }
    }

    public function store() {
        helper(['form']);
        $userModel = new UserModel();

        $rules = $userModel->getRules();

        if ($this->validate($rules)) {
            $data = [
                'username' => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];

            $userModel->save($data);
            $test = $userModel->where('email', $this->request->getVar('email'))->first();

            $encryption_iv = '13112000qwerplmo';
            $encryption_key = "PakThani";
            $ciphering = "AES-128-CTR";
            $iv_length = openssl_cipher_iv_length($ciphering);
            $encryption = openssl_encrypt(strval($test['id']), $ciphering, $encryption_key, 0, $encryption_iv);
    
            $data = [
                'user_id' => $encryption,
            ];

            $email = \Config\Services::email();
            $to = $this->request->getVar('email');
            $body = view('email_verification', $data);
            $email->setTo($to);
            $email->setFrom('ini2dummy@gmail.com', 'Confirm Registration');
            $email->setSubject('Pak Thani Registration');
            $email->setMessage($body);

            if ($email->send()) {
                $data = [
                    'regist' => true,
                ];

                echo view('register', $data);
                //return redirect()->to(base_url() . '/signin');
            } else {
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}
