<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return "Selamat Datang";
    }

    public function about()
    {
        return "Nama : Alfinza Sanjaya Putra<br>NIM : 2041720186";
    }

    public function articles($id)
    {
        return "Halaman Artikel dengan Id $id";
    }
}
