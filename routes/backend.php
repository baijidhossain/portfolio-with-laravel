<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AdminMiddleware;


// Admin Login Page Load before login
Route::get('admin/login', [AuthenticatedSessionController::class, 'create'])->name('admin.login');
Route::post('admin/login', [AuthenticatedSessionController::class, 'store']);
Route::post('admin/logout', [AuthenticatedSessionController::class, 'destroy'])->name('admin.logout');


// After authentication then route access
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware' => ['AdminMiddleware']], function () {

  Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});
