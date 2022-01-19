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

        $rules = [
            'email'     => 'required|min_length[4]|max_length[100]|valid_email',
            'password'  => 'required|min_length[4]|max_length[50]',
        ];

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

    public function out()
    {
        $session = session();
        $session->remove(['id', 'username', 'email', 'isLoggedIn']);

        return redirect()->to(base_url() . '/login');
    }
}
