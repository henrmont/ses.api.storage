<?php

use App\Http\Controllers\StorageController;
use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware(['api', Auth::class])
    ->prefix('storage')
    ->name('storage.')
    ->controller(StorageController::class)
    ->group(function () {
        Route::get('download/{module}/{archive}', 'download')->name('download');
    });
