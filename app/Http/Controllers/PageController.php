<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return 'Selamat Datang';
    }
    public function about(){
        return 'Khairun Nisa_2041720188';
    }
    public function articles($id){
        return 'Halaman Artikel dengan Id'. $id;
    }
}
