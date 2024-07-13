<?php

use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/admin/login', function () {
  return view('admin.auth.login');
});

Route::get('/admin/login', [AdminLoginController::class, 'index']);
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');

Route::get('/admin/home', [HomeController::class, 'index'])->name('admin.home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
