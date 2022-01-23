<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\CartsModel;

class PasswordController extends Controller {  
    public function index() {
        helper(['form']);
        $data = [
            'send' => false
        ];

        echo view('loginPasForgot', $data);
    }

    public function showEditPasswordPage($id) {
        $data = [ 'id' => $id ];
        
        helper(['form']);
        echo view('edit_password', $data);
    }

    public function editPassword($id) {
        $session = session();
        $userModel = new UserModel();
        $newPassword = $this->request->getVar('password');

        if ($newPassword == "" ) {
            $session->setFlashdata('msg', 'Please input new password.');
            return redirect()->to(base_url() . '/edit_password/' . $id);
        }

        $id_string = $userModel->decryptID($id);
        $id_int = (int)$id_string;
        $hashPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $userModel->changePassword($id_int, $hashPassword);

        $data = ['text' => 'Password successfully updated!'];

        echo view('success', $data);
    }

    public function send() {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');

        if ($email == "") {
            $session->setFlashdata('msg', 'Please fill the email section.');
            return redirect()->to(base_url() . '/login_password=forgot');
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $session->setFlashdata('msg', 'Email format incorrect.');
            return redirect()->to(base_url() . '/login_password=forgot');
        }

        $test = $userModel->where('email', $email)->first();

        if ($test['is_verified'] == 1) {
            $data = [
                'user_id' => $userModel->encryptID($test['id']),
            ];
    
            $email = \Config\Services::email();
            $to = $this->request->getVar('email');
            $body = view('changePas_verification', $data);
    
            $email->setTo($to);
            $email->setFrom('ini2dummy@gmail.com', 'Confirm Password Change');
            $email->setSubject('Pak Thani Change User Password');
            $email->setMessage($body);
    
            if ($email->send()) {
                $data = [
                    'send' => true
                ];
    
                echo view('loginPasForgot', $data);
                //return redirect()->to(base_url() . '/signin');
            } else {
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }
        } else {
            $session->setFlashdata('msg', 'Account not yet activated.');
            return redirect()->to(base_url() . '/login_password=forgot');
        }
    }
}
