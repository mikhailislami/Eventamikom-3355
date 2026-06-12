<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\EventController as EventAdminController;


use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminPartnerController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Artisan;
$data = [
    'nama' => 'Mikhail Bogart Islami',
    'nim' => '24.12.3355'
];
Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

// Grouping untuk URL berawalan /admin
Route::prefix('admin')->name('admin.')->group(function () {
// Rute Login bebas akses
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.post');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Mengamankan Route Administrasi di balik tembok (Middleware)
Route::middleware(['auth', 'admin'])->group(function () {
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('events', EventController::class);

Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');
});
});

Route::get('/', [FrontendController::class, 'index']);

Route::get('/profil', fn() => view('profil', $data));
Route::get('/katalog', fn() => view('katalog', $data));
Route::get('/bantuan', fn() => view('bantuan', $data));
Route::get('/kontak', fn() => view('contact', $data));

Route::get('/event-detail', [EventController::class, 'index'])->name('events.show'); 
Route::get('/checkout', [EventController::class, 'checkout'])->name('checkout'); 
Route::get('/ticket', [EventController::class, 'ticket'])->name('ticket');


Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/event', [EventController::class, 'indexAdmin'])->name('events');
Route::get('/transactions', [DashboardController::class, 'transactions'])->name('transactions');
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('events', EventAdminController::class);
});

Route::resource('admin-categories',CategoryController::class);
Route::resource('admin-partners', AdminPartnerController::class);

Route::get('/gas-migrate', function () {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return "Database Berhasil di-Update! <br> Output: " . Artisan::output();
    } catch (\Exception $e) {
        return "Gagal Migrate: " . $e->getMessage();
    }
});
