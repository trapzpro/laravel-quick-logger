<?php

namespace Trapzpro\QuickLogger\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Trapzpro\QuickLogger\QuickLogger
 */
class QuickLogger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-quick-logger';
    }
}
