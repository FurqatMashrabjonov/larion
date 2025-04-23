<?php

namespace Furqat\Larion\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Furqat\Larion\Larion
 */
class Larion extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Furqat\Larion\Larion::class;
    }
}
