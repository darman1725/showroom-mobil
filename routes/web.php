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
Route::get('detail/{id}', [CustomerController::class, 'show'])->name('detail');
Route::get('transactions/{id}/create', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('transactions', [TransactionController::class, 'store'])->name('transactions.store');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/master', function () {
    return view('layouts.master');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('cars', CarController::class);
    Route::resource('brands', BrandController::class);
});