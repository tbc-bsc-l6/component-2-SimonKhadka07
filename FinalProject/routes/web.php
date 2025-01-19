<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

// Welcome Page Route
Route::get('/', function () {
    return view('welcome');
})->name('welcome'); // This names the route 'welcome', so you can reference it easily.

// Home Page Route
Route::get('/home', [HomeController::class, 'index'])->name('home'); // Maps to HomeController@index

// Authenticated Routes (Require Login)
Route::middleware([
    'auth:sanctum', // Uses Sanctum for authentication
    config('jetstream.auth_session'),
    'verified', // Ensures email verification
])->group(function () {
    // Dashboard Route
    Route::get('/dashboard', function () {
        return view('dashboard'); // Points to the 'dashboard.blade.php' file
    })->name('dashboard');

    // Product Routes
    Route::resource('products', ProductController::class); // Maps CRUD routes for ProductController

    Route::prefix('admin')->middleware(['auth'])->group(function () {
        Route::resource('products', ProductController::class);
    });
    

});
