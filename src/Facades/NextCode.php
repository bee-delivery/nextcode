<?php

namespace BeeDelivery\NextCode\Facades;

use Illuminate\Support\Facades\Facade;

class NextCode extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'nextcode';
    }
}
