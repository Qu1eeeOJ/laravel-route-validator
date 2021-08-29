<?php

namespace Qu1eeeoj\LaravelRouteValidator\Providers;

use Illuminate\Support\ServiceProvider;
use Qu1eeeoj\LaravelRouteValidator\Contracts\RouteValidatorContract;
use Qu1eeeoj\LaravelRouteValidator\RouteValidator;

class RouteValidatorServiceProvider extends ServiceProvider
{
    /**
     * All of the container singletons that should be registered.
     *
     * @var array
     */
    public $singleton = [
        RouteValidatorContract::class => RouteValidator::class,
    ];

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
