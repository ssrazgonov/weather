<?php

namespace App\Services;

use App\Contracts\WeatherProvider;
use Illuminate\Support\Facades\Cache;
use InvalidArgumentException;

class WeatherService
{
    public const CACHE_KEY_PREFIX = 'weather:city:';

    public function __construct(
        private WeatherProvider $provider,
        private int $cacheTtl = 300
    ) {}

    public function getWeatherInfo(array $params): array
    {
        $cacheKey = static::CACHE_KEY_PREFIX . $params['lat'] . $params['lon'];

        return Cache::remember($cacheKey, $this->cacheTtl, function() use ($params) {
            return $this->provider->getWeatherInfo($params);
        });
    }
}
