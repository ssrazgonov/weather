<?php

namespace App\Providers;

use App\Contracts\WeatherProvider;
use App\Providers\Weather\OpenWeatherProvider;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            WeatherProvider::class,
            fn () => new OpenWeatherProvider(config('openweather.token'), config('openweather.url')),
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
