<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontController;
use App\Http\Controllers\homeController;


// Here is all are Home Route 
Route::get('/', [frontController::class, 'home']);
Route::get('/services', [frontController::class, 'services']);
Route::get('/about-us', [frontController::class, 'aboutUs']);
Route::get('/pricing', [frontController::class, 'pricing']);
Route::get('/contact', [frontController::class, 'contact']);
Route::get('/service-area', [frontController::class, 'serviceArea']);
Route::get('/team', [frontController::class, 'team']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('/register', [App\Http\Controllers\HomeController::class, 'register'])->name('register');
