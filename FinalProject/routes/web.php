<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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
    
    // Admin-Specific Routes
    Route::prefix('admin')->group(function () {
        Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard'); // Admin Dashboard
        Route::resource('products', ProductController::class);                 // Product Management
    });

    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');

    Route::get('/catalog', [ProductController::class, 'catalog'])->name('products.catalog');


});
