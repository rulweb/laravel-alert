<?php

namespace RulWeb\Alert\Facades;

use Illuminate\Support\Facades\Facade as BaseFacade;

class Alert extends BaseFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'alert';
    }
}