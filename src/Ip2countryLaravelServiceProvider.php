<?php

namespace Sicaboy\Ip2countryLaravel;

use Illuminate\Support\ServiceProvider;

class Ip2countryLaravelServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/ip2country.php' => config_path('ip2country.php'),
        ], 'config');
    }
}
