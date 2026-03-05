<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\ServiceListController;
use App\Http\Controllers\Admin\AddServiceListConroller;
use App\Http\Controllers\Admin\DashboardConroller;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/service-list', [ServiceListController::class, 'index'])->name('service.list');

Route::get('/dashboard', [DashboardConroller::class, 'index'])->name('dashboard');


Route::prefix('admin')->name('admin.')->group(
    function () {
        Route::get('/service-list', [AddServiceListConroller::class, 'index'])->name('service.list');
        Route::get('/service-list/create', [AddServiceListConroller::class, 'create'])->name('service.list.create');
    }
);
