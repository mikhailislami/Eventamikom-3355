<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminPartnerController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\Admin\EventController as EventAdminController;
use Illuminate\Support\Facades\Artisan;

$data = [
    'nama' => 'Mikhail Bogart Islami',
    'nim' => '24.12.3355'
];

Route::get('/login', function () {
    return redirect()->route('admin.login');
})->name('login');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('events', EventAdminController::class);
        Route::resource('categories', CategoryController::class);
        Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');
    });
});

Route::get('/', [FrontendController::class, 'index']);

Route::get('/profil', fn() => view('profil', $data));
Route::get('/katalog', fn() => view('katalog', $data));
Route::get('/bantuan', fn() => view('bantuan', $data));
Route::get('/kontak', fn() => view('contact', $data));

Route::get('/event-detail/{event}', [EventController::class, 'show'])->name('events.show'); 
Route::get('/ticket', [EventController::class, 'ticket'])->name('ticket');

Route::get('/checkout/{event}', [CheckoutController::class, 'create'])->name('checkout.create'); // Form checkout
Route::post('/checkout/{event}', [CheckoutController::class, 'store'])->name('checkout.store');   // Proses simpan transaksi

Route::resource('admin-partners', AdminPartnerController::class);

Route::get('/gas-migrate', function () {
    try {
        Artisan::call('migrate', ['--force' => true]);
        return "Database Berhasil di-Update! <br> Output: " . Artisan::output();
    } catch (\Exception $e) {
        return "Gagal Migrate: " . $e->getMessage();
    }
});