<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class SignUpController extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function store()
    {
        helper(['form']);
        $rules = [
            'username'        => 'required|min_length[2]|max_length[50]',
            'email'           => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'        => 'required|min_length[4]|max_length[50]',
            'confirmpassword' => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $to = $this->request->getVar('email');

            $email = \Config\Services::email();
            $email->setTo($to);
            $email->setFrom('timothychristyan10@gmail.com', 'Confirm Registration');
            $email->setSubject('test mail');
            $email->setMessage('this is email for testing');

            if ($email->send()) {
                echo 'Email successfully sent';
            } else {
                $data = $email->printDebugger(['headers']);
                print_r($data);
            }
            
            $data = [
                'username' => $this->request->getVar('username'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            
            $userModel->save($data);
            $userModel = new UserModel();

            return redirect()->to('/login');
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}
