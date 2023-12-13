<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use Illuminate\Routing\Controllers\Middleware;
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

Route::get('/', function () {
    return view('pages.welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::GET('order/{id}', [OrderController::class, 'create'])->name('order');
    Route::GET('payment/{id}', [OrderController::class, 'bayar'])->name('order.bayar');
    Route::GET('/dashboard', [Controller::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    
    // Route::get('/', [OrderController::class, 'index']);
    Route::GET('pesanan', [OrderController::class, 'index'])->name('home');
    Route::POST('order/checkout', [OrderController::class, 'store'])->name('store');

    Route::post('/midtrans-callback', [OrderController::class, 'callback']);
});
require __DIR__.'/auth.php';
