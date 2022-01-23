<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\CartsModel;

class PasswordController extends Controller {  
    public function index() {
        helper(['form']);
        $data = [];
        echo view('loginPasForgot');
    }

    public function send() {
        echo view('edit_password');
    }
}
