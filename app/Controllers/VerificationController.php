<?php

namespace App\Controllers;

class VerificationController extends BaseController
{
    public function index()
    {
        return view('email_verification');
    }

    public function succeed()
    {
        return view('verification_succeed');
    }
}
