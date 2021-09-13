<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    echo "Selamat Datang";
});
Route::get('about', function () {
    echo "NIM &nbsp; &nbsp; : 2031710029 <br> NAMA  : Nissa Nursabrina";
});
Route::get('articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID ".$id;
});

//Nissa Nursabrina_2031710029_22_MI2E