<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CustomAuth;



Route::group(['middleware' => [CustomAuth::class]], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard'); //->middleware(['auth', 'verified'])

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

});

require __DIR__.'/auth.php';
