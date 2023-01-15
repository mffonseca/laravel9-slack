<?php

namespace Mfonseca\Slack\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see Mfonseca\Slack\Slack
 */
class Slack extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mfonseca.slack';
    }
}
