<?php

namespace Sicaboy\Ip2countryLaravel\Clients;

class Ip2countryClient
{
    /**
     * @param string $ip
     * @return string
     */
    public function getCountry(string $ip): string
    {
        $url = config('ip2country.api_url') . '/' . $ip;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        return $output;
    }
}
