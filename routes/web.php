<?php

use App\Http\Controllers\{
    StockController 
};

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

Route::middleware(['auth'])->group(function () {
    Route::delete('/delete/{id}', [StockController::class, 'destroy'])->name('stock.destroy');
    Route::get('/dashboard', [StockController::class, 'index'])->middleware(['auth'])->name('posts.index');
    Route::get('/create', [StockController::class, 'create'])->name('stock.create');
    Route::post('/stock', [StockController::class, 'store'])->name('stock.store');
    Route::put('/stock/{id}', [StockController::class, 'update'])->name('stock.update');
    Route::get('/stock/edit/{id}', [StockController::class, 'edit'])->name('stock.edit');
});

    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth'])->name('dashboard');

Route::get('/', function () {
    return view('auth.login');
});

require __DIR__.'/auth.php';