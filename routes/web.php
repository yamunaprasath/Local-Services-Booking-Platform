<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceListController;
use App\Http\Controllers\Backend\Partner\AddServiceListConroller;
use App\Http\Controllers\Backend\Partner\DashboardConroller;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/register', [AuthController::class, 'create'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.store');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/service-list', [ServiceListController::class, 'index'])->name('service.list');

Route::prefix('partner')->name('partner.')->middleware('auth')->group(
    function () {
        Route::get('/dashboard', [DashboardConroller::class, 'index'])->name('dashboard');
        Route::get('/service-list', [AddServiceListConroller::class, 'index'])->name('service.list');
        Route::get('/service-list/create', [AddServiceListConroller::class, 'create'])->name('service.list.create');
        Route::post('/service-list/create', [AddServiceListConroller::class, 'store'])->name('service.list.store');
        Route::get('/service-list/{id}/edit', [AddServiceListConroller::class, 'edit'])->name('service.list.edit');
        Route::put('/service-list/{id}', [AddServiceListConroller::class, 'update'])->name('service.list.update');
        Route::delete('/service-list/{id}', [AddServiceListConroller::class, 'destroy'])->name('service.list.destroy');
    }
);
