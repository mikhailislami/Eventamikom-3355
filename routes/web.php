<?php

use Illuminate\Support\Facades\Route;

$data = [
    'nama' => 'Nama Kamu',
    'nim' => '22XXXX'
];

Route::get('/', fn() => view('home', $data));
Route::get('/profil', fn() => view('profil', $data));
Route::get('/katalog', fn() => view('katalog', $data));
Route::get('/bantuan', fn() => view('bantuan', $data));
Route::get('/kontak', fn() => view('contact', $data));