<?php

use App\Http\Controllers\StorageController;
use App\Http\Middleware\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'api'], function ($router) {

    Route::get('download/{archive}', [StorageController::class, 'download'])->middleware(Auth::class);

});
