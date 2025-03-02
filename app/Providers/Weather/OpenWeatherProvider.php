<?php

namespace App\Providers\Weather;

use App\Contracts\WeatherProvider;
use Illuminate\Support\Facades\Http;

class OpenWeatherProvider implements WeatherProvider
{
    public function __construct(
        private string $token,
        private string $url
    ) {}

    public function getWeatherInfo(array $params): array
    {
        $response = Http::baseUrl($this->url)
            ->get('/data/2.5/weather', [
                'appid' => $this->token,
                'units' => 'metric',
                ...$params
            ])
            ->throw()
            ->json();

        return $response;
    }
}
