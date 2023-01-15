<?php

namespace App\Providers;

use App\Service\contracts\IHttpClient;
use App\Service\HttpClient;
use Illuminate\Support\ServiceProvider;

class WeatherAppProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IHttpClient::class, HttpClient::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
