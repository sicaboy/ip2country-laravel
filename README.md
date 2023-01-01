# Laravel Client for ip2country

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sicaboy/ip2country-laravel.svg?style=flat-square)](https://packagist.org/packages/sicaboy/ip2country-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/sicaboy/ip2country-laravel/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sicaboy/ip2country-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/sicaboy/ip2country-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/sicaboy/ip2country-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/sicaboy/ip2country-laravel.svg?style=flat-square)](https://packagist.org/packages/sicaboy/ip2country-laravel)

Laravel Client for [ip2country](https://github.com/sicaboy/ip2country)

## Installation

You can install the package via composer:

```bash
composer require sicaboy/ip2country-laravel
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="ip2country-laravel-config"
```

This is the contents of the published config file:

```php
return [
    'api_key' => env('IP2COUNTRY_API_KEY'),
    'api_url' => env('IP2COUNTRY_API_URL', 'https://ip2country.yourdomain.com'),
];
```

## Usage

```php
$ip2countryLaravel = new Sicaboy\Ip2countryLaravel();
echo $ip2countryLaravel->getCountryCodeByIp('1.1.1.1');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [sicaboy](https://github.com/sicaboy)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
