<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class SigninController extends Controller
{
    public $session;

    public function index()
    {
        helper(['form']);
        echo view('loginAlternate');
    }

    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);

            if ($authenticatePassword) {
                $ses_data = [
                    'id'         => $data['id'],
                    'username'   => $data['username'],
                    'email'      => $data['email'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);

                return redirect()->to('/');
            } else {
                $session->setFlashdata('msg', 'Password is incorrect.');

                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Email does not exist.');

            return redirect()->to('/login');
        }
    }

    public function out() {
        $session->remove(['id', 'username', 'email', 'isLoggedIn']);

        return redirect()->to('/login');
    }
}
