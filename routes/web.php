<?php

use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ServiceController::class, 'home'])->name('home');
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::post('/services/{service}/book', [ServiceController::class, 'storeBooking'])->name('services.book');
Route::get('/booking/success/{service}', [ServiceController::class, 'success'])->name('booking.success');
