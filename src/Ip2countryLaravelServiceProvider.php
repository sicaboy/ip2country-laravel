<?php

namespace Sicaboy\Ip2countryLaravel;

use Illuminate\Support\ServiceProvider;

class Ip2countryLaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // ip2country-laravel-config

        $this->publishes([
            __DIR__.'/../config/ip2country.php' => config_path('ip2country.php'),
        ], 'ip2country-laravel-config');

    }
}
