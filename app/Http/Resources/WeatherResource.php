<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WeatherResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'weather' => $this->resource['weather'][0]['description'] ?? '',
            'temp' => $this->resource['main']['temp'] ?? '',
            'feels_like' => $this->resource['main']['feels_like'] ?? '',
            'temp_min' => $this->resource['main']['temp_max'] ?? '',
            'pressure' => $this->resource['main']['temp'] ?? '',
            'humidity' => $this->resource['main']['humidity'] ?? '',
            'wind_speed' => $this->resource['wind']['speed'] ?? '',
        ];
    }
}
