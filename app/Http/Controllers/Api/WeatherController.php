<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\WeatherRequest;
use App\Http\Resources\WeatherResource;
use App\Services\WeatherService;
use Throwable;

class WeatherController extends Controller
{
    public function info(WeatherRequest $weatherRequest, WeatherService $weatherService)
    {
        try {
            $weatherInfo = $weatherService->getWeatherInfo($weatherRequest->validated());

            return WeatherResource::make($weatherInfo);
        } catch (Throwable $exception) {

        }
    }
}
