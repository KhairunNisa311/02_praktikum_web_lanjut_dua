<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{

    public function HalamanUtama(){
        return redirect('https://www.educastudio.com/');
    }

    public function product1(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    }

    public function product2(){
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }

    public function product3(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }

    public function product4(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }

    public function news1($news){
        return redirect('https://www.educastudio.com/news');
    }

    public function news2($news){
        return redirect('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
    }

    public function program1(){
        return redirect('https://www.educastudio.com/program/karir');
    }

    public function program2(){
        return redirect('https://www.educastudio.com/program/magang');
    }

    public function program3(){
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    }

    public function aboutUs(){
        return redirect('https://www.educastudio.com/about-us');
    }

    public function contactUs(){
        return redirect('https://www.educastudio.com/contact-us');
    }

}
