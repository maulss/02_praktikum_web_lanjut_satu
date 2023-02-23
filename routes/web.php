<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Nama : Muhammad Maulana Givari 
// Nim : 2141720141
//kelas : TI-2C

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return'<h1>Selamat Datang</h1>';
});

Route::get('/about', function () {
    return "<h1>Nama : Muhammad Maulana Givari <br> NIM: 2141720141 </h1>";
});

Route::get('/articles/{id}', function ($id) {
    return "<h1>Halaman Artikel dengan id $id</h1>";
});



    
