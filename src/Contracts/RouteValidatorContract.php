<?php

namespace Qu1eeeoj\LaravelRouteValidator\Contracts;

interface RouteValidatorContract
{
    /**
     * Perform validation from the Route parameters
     *
     * @param array $rules
     * @param bool $force
     * @return RouteValidatorContract
     * @throws \Illuminate\Validation\ValidationException
     */
    public static function make(array $rules, bool $force = true);

    /**
     * Get validator
     *
     * @return \Illuminate\Validation\Factory|null
     */
    public function getValidator();
}
