<?php

namespace App\Controllers;

class ListTransaksiController extends BaseController
{
    public function index()
    {
        return view('list_transaksi');
    }
}