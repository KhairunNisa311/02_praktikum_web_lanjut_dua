<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;
Use App\Http\Controllers\PageController;
Use App\Http\Controllers\AboutController;
Use App\Http\Controllers\ArticleController;
Use App\Http\Controllers\CompanyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Praktikum 2

Route::get('/', [HomeController:: class, 'index']);
Route::get('/about', [AboutController:: class, 'about']);
Route::get('/article/{id}', [ArticleController:: class, 'articles']);

//Praktikum 3

Route::get('/Halaman-utama', [CompanyController::class, 'halamanUtama']);

Route::prefix('categori')->group(function(){
    Route::get('/marbel-edu-games', [CompanyController::class, 'product1']);
    Route::get('/marbel-and-friends-kids-games', [CompanyController::class, 'product2']);
    Route::get('/riri-story-books', [CompanyController::class, 'product3']);
    Route::get('/kolak-kids-song', [CompanyController::class, 'product4']);
});

Route::get('/news/{news}', [CompanyController::class, 'news1']);
Route::get('/educa-studio-berbagi/{news}', [CompanyController::class, 'news2']);

Route::prefix('categori')->group(function(){
    Route::get('/karir', [CompanyController::class, 'program1']);
    Route::get('/magang', [CompanyController::class, 'program2']);
    Route::get('/kunjungan-industri', [CompanyController::class, 'program3']);
});

Route::get('/about-us', [CompanyController::class, 'aboutUs']);

Route::get('/contact-us', [CompanyController::class, 'contactUs']);
