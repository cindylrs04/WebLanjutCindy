<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
       }

       public function about() {
        return 'Nama : Cindy Laili Larasati <br> Nim : 2341720038';
       }

       public function articles($id) {
        return 'Halaman Artikel dengan ID ' .$id;
       }
}