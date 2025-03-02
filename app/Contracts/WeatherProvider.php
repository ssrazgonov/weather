<?php

namespace App\Contracts;

interface WeatherProvider
{
    public function getWeatherInfo(array $params): array;
}
