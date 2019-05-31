# Laravel5.8 + Laravel-websockets Example

This is an example application built with the [Laravel WebSockets](https://github.com/beyondcode/laravel-websockets) package.

## Usage

1. Clone this repository
2. `composer install`
3. `cp .env.example .env`
4. `php artisan key:generate`
5. Configuration PUSHER_APP_ID/PUSHER_APP_KEY/PUSHER_APP_SECRET...
6. `php artisan migrate`
7. `php artisan websockets:serve`, default ws url: 127.0.0.1:6001

## remark

Laravel-websockets requires laravel/framework >= 5.7. Lower version of laravel can use [tlaverdure/laravel-echo-server](https://github.com/tlaverdure/laravel-echo-server) based on NodeJs.
