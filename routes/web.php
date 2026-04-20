<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;

$data = [
    'nama' => 'Mikhail Bogart Islami',
    'nim' => '24.12.3355'
];

Route::get('/', fn() => view('welcome', $data))->name('home');
Route::get('/home', fn() => view('home', $data));

Route::get('/profil', fn() => view('profil', $data));
Route::get('/katalog', fn() => view('katalog', $data));
Route::get('/bantuan', fn() => view('bantuan', $data));
Route::get('/kontak', fn() => view('contact', $data));

Route::get('/event-detail', [EventController::class, 'index'])->name('events.show'); 
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout'); 
Route::get('/ticket', [EventController::class, 'ticket'])->name('ticket');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/event', [EventController::class, 'indexAdmin'])->name('admin.events.index');
Route::get('/transactions', [DashboardController::class, 'transactions'])->name('admin.transactions.index');
Route::get('/categories', [CategoryController::class, 'index'])->name('admin.categories.index');