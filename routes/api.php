<?php

use App\Http\Controllers\Api\WeatherController;
use Illuminate\Support\Facades\Route;

Route::prefix('weather')->group(function() {
    Route::post('/info', [WeatherController::class, 'info']);
});

