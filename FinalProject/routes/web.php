<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;

// Public Routes
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Authenticated User Routes
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Grouped Routes for Authenticated Users
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    // Dashboard Route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Admin Routes (Product Management)
    Route::prefix('admin')->middleware('admin')->group(function () {
        Route::resource('products', ProductController::class); // Product Management (CRUD)
    });

    // Cart Routes (Add/Remove)
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
});

