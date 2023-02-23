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


Route::get('/test', function () {
    return view('test');
});

Route::get('/siswa', function () {
    return "<h1>Saya Siswa</h1>";
});

Route::get('/siswa/{id}', function ($id) {
    return "<h1>Saya Siswa dengan Absen $id</h1>";
});

Route::get('/siswa/{id}/{nama}', function ($id, $nama) {
    return "<h1>Saya Siswa dengan Absen $id dan $nama </h1>";
})-> where ('id', '[0-9]+' );

Route::get('/siswa/{id}/{nama}', function ($id, $nama) {
    echo "<h1>Saya Siswa dengan Absen $id dengan nama  $nama </h1>";
})-> where (['id'=>'[0-9]+','nama'=>'[A-Za-z]+']);


    