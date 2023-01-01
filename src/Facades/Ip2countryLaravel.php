<?php

namespace Sicaboy\Ip2countryLaravel\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string getCountryCode()
 * @see \Sicaboy\Ip2countryLaravel\Ip2countryLaravel
 */
class Ip2countryLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sicaboy\Ip2countryLaravel\Ip2countryLaravel::class;
    }
}
