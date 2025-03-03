<?php

use App\Http\Controllers\Api\WeatherController;
use Illuminate\Support\Facades\Route;

Route::prefix('weather')->group(function() {
    Route::get('/info', [WeatherController::class, 'info']);
});

