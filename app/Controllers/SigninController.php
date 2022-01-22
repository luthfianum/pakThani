<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class SigninController extends Controller {
    public $session;

    public function index() {
        helper(['form']);
        $data = [];
        echo view('loginAlternate', $data);
    }

    public function loginAuth() {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        if ($email == "") {
            $session->setFlashdata('msg', 'Please fill the email section.');
            return redirect()->to(base_url() . '/login');
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $session->setFlashdata('msg', 'Email format incorrect.');
            return redirect()->to(base_url() . '/login');
        } else if ($password == "") {
            $session->setFlashdata('msg', 'Please fill the password.');
            return redirect()->to(base_url() . '/login');
        }

        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);

            if ($authenticatePassword) {
                if ($data['is_verified'] == 1) {
                    $ses_data = [
                        'id'         => $data['id'],
                        'username'   => $data['username'],
                        'email'      => $data['email'],
                        'isLoggedIn' => TRUE
                    ];
    
                    $session->set($ses_data);
                    return redirect()->to(base_url() . '/');
                } else {
                    $session->setFlashdata('msg', 'Account not yet activated.');
                    return redirect()->to(base_url() . '/login');
                }
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to(base_url() . '/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to(base_url() . '/login');
        }
    }

    public function out() {
        $session = session();
        $session->remove(['id', 'username', 'email', 'isLoggedIn']);

        return redirect()->to(base_url() . '/login');
    }
}
