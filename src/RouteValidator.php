<?php

namespace Qu1eeeoj\LaravelRouteValidator;

use Qu1eeeoj\LaravelRouteValidator\Contracts\RouteValidatorContract;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;

class RouteValidator implements RouteValidatorContract
{
    /**
     * @var \Illuminate\Validation\Factory|null
     */
    private $validator = null;

    /**
     * Perform validation from the Route parameters
     *
     * @param array $rules
     * @param bool $force
     * @return RouteValidatorContract
     * @throws \Illuminate\Validation\ValidationException
     */
    public static function make(array $rules, bool $force = true)
    {
        $self = new static;
        $self->validator = Validator::make(Route::current()->parameters(), $rules);

        if ($force) {
            $self->validator->validate();
        }

        return $self;
    }

    /**
     * Get validator
     *
     * @return \Illuminate\Validation\Factory|null
     */
    public function getValidator()
    {
        return $this->validator;
    }
}
