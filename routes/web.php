<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', [CustomerController::class, 'index']);
Route::post('/search', [CustomerController::class, 'search'])->name('search');
Route::post('/filter', [CustomerController::class, 'filter'])->name('filter');
Route::get('detail/{id}', [CustomerController::class, 'show'])->name('detail');
Route::get('transactions/{id}/create', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('transactions', [TransactionController::class, 'store'])->name('transactions.store');
Route::get('transactions/{id}/bukti', [TransactionController::class, 'bukti'])->name('transactions.bukti');

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('cars', CarController::class);
    Route::resource('brands', BrandController::class);
    Route::get('transactions/order', [TransactionController::class, 'order'])->name('transactions.order');
    Route::get('transactions/history', [TransactionController::class, 'history'])->name('transactions.history');
    Route::get('transactions/{id}', [TransactionController::class, 'show'])->name('transactions.show');
    Route::put('transactions/{id}', [TransactionController::class, 'update'])->name('transactions.update');
    Route::get('transactions/{id}/nota', [TransactionController::class, 'cetakNota'])->name('transactions.nota');
});