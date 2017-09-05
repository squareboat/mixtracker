<?php

namespace SquareBoat\Mixtracker\Facades;

use Illuminate\Support\Facades\Facade;

class Mixtracker extends Facade
{
    /**
    * Get the binding in the IoC container
    *
    * @return string
    */
    protected static function getFacadeAccessor()
    {
        return 'mixtracker';
    }
}
