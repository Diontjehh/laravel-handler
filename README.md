# Laravel Invokables

[![Latest Version on Packagist](https://img.shields.io/packagist/v/diontjehh/laravel-invokables.svg?style=flat-square)](https://packagist.org/packages/diontjehh/laravel-invokables)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/diontjehh/laravel-invokables/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/diontjehh/laravel-invokables/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/diontjehh/laravel-invokables/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/diontjehh/laravel-invokables/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/diontjehh/laravel-invokables.svg?style=flat-square)](https://packagist.org/packages/diontjehh/laravel-invokables)

## Installation

You can install the package via composer:

```bash
composer require diontjehh/laravel-invokables
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-invokables-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$variable = new Diontjehh\Skeleton();
echo $variable->echoPhrase('Hello, Diontjehh!');
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

- [Dion Boerrigter](https://github.com/diontjehh)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
