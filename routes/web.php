<?php

use Illuminate\Support\Facades\Route;

$data = [
    'nama' => 'Mikhail Bogart Islami',
    'nim' => '24.12.3355'
];

Route::get('/', fn() => view('welcome', $data));
Route::get('/home', fn() => view('home', $data));
Route::get('/profil', fn() => view('profil', $data));
Route::get('/katalog', fn() => view('katalog', $data));
Route::get('/bantuan', fn() => view('bantuan', $data));
Route::get('/kontak', fn() => view('contact', $data));