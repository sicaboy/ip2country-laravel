<?php

namespace Sicaboy\Ip2countryLaravel;

use Sicaboy\Ip2countryLaravel\Clients\Ip2countryClient;

class Ip2countryLaravel
{
    /**
     * @var Ip2countryClient
     */
    protected $client;

    public function __construct(Ip2countryClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $ip
     * @return string
     */
    public function getCountry(string $ip): string
    {
        return $this->client->getCountry($ip);
    }
}
