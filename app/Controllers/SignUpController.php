<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\CartsModel;

class SignUpController extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        echo view('register', $data);
    }

    public function temp()
    {
        helper(['form']);
        $data = [];
        echo view('email_verification');
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
            $userModel = new UserModel();
            $cart = new CartsModel();

            $to = $this->request->getVar('email');
            $body = view('email_verification');

            $email = \Config\Services::email();
            $email->setTo($to);
            $email->setFrom('ini2dummy@gmail.com', 'Confirm Registration');
            $email->setSubject('Pak Thani Registration');
            $email->setMessage($body);

            if ($email->send()) {
                echo 'email-sent';
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

            $test = $userModel->where('email', $this->request->getVar('email'))->first();

            $data = [
                'user_id' => $test['id']
            ];

            $cart->save($data);

            return redirect()->to(base_url() . '/login');
            //return redirect()->to('/login'); #older version
        } else {
            $data['validation'] = $this->validator;
            echo view('register', $data);
        }
    }
}
