## About

This is a demo laravel 5.3 project for [https://github.com/appointer/Swaggervel](https://github.com/appointer/Swaggervel "appointer/Swaggervel") 


## Installation

If you want to install `appointer/Swaggervel` into your project proceed with following:  
- `composer require "appointer/Swaggervel" --dev`  
- Add `Jlapp\Swaggervel\SwaggervelServiceProvider::class` to your providers array in `app/config/app.php` above your route provider, to avoid any catch-all routes
- Run `php artisan vendor:publish` to push swagger-ui to your public folder.

## How to document your API's

TODO ...

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
