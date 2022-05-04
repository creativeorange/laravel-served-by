# Laravel Served By

[![Latest Version on Packagist](https://img.shields.io/packagist/v/creativeorange/laravel-served-by.svg?style=flat-square)](https://packagist.org/packages/creativeorange/laravel-served-by)
[![Total Downloads](https://img.shields.io/packagist/dt/creativeorange/laravel-served-by.svg?style=flat-square)](https://packagist.org/packages/creativeorange/laravel-served-by)

Useful middleware for Laravel Requests & Jobs to determine which server is serving (or running) the request. For HTTP requests, the identifier string will be sent back as HTTP Header "X-Served-By".
In jobs, it is possible to send Context to Flare, or tag the server in Horizon.

## Installation

You can install the package via composer:

```bash
composer require creativeorange/laravel-served-by
```
For Laravel 8 or lower please install version 1.

## Usage HTTP requests

To allow Served By for all your routes, add the ServedBy middleware at the top of the $middleware property of app/Http/Kernel.php class:

```php
protected $middleware = [
    \Creativeorange\ServedBy\Http\Middleware\ServedBy::class,
    // ...
];
```
## Flare
If you use Flare, you can add the following to your job(s):

```php
    /**
     * Get the middleware the job should pass through.
     *
     * @return array
     */
    public function middleware()
    {
        return [new Creativeorange\ServedBy\Http\Middleware\Jobs\ServedBy];
    }
```

## Configuration
The defaults are set in config/served-by.php. Publish the config to copy the file to your own config:

```shell
php artisan vendor:publish --tag="served-by"
```

By default, you can also overwrite the identifier string by adding ```SERVED_BY_IDENTIFIER``` to your .env

## Credits

-   [Creativeorange B.V.](https://github.com/creativeorange)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
