<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/',[HomeController::class,'homepage']);

Route::get('/home',[HomeController::class,'index']);



Route::get('/home',[AdminController::class,'index'])->name('home');
