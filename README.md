# Laravel-Route-Validator
---
This library will facilitate the validation of route parameters in the laravel framework.

## Installation
```sh
composer require qu1eeeoj/laravel-route-validator
```

## Usage in steps
1. Create middleware
```sh
php artisan make:middleware Post/PostIDVerify
```
2. Now we call the Route Validator from the library and prescribe all the rules for route
```php
<?php

namespace App\Http\Middleware\Post;

use Closure;
use Illuminate\Http\Request;
use Qu1eeeoj\LaravelRouteValidator\RouteValidator;

class PostIDVerify
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     * @throws \Illuminate\Validation\ValidationException
     */
    public function handle(Request $request, Closure $next)
    {
        RouteValidator::make([
            'post_id' => ['required', 'integer', 'exists:posts,id']
        ]);

        return $next($request);
    }
}
```

3. Done!

## If you want to handle the errors yourself, then you can get a validator object
```php
$routeValidator = RouteValidator::make([
    'post_id' => ['required', 'integer', 'exists:posts,id']
], false);
$validator = $routeValidator->getValidator(); // \Illuminate\Validation\Factory|null
```
