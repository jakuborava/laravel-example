<?php

namespace JakubOrava\LaravelExample\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \JakubOrava\LaravelExample\LaravelExample
 */
class LaravelExample extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-example';
    }
}
