<?php

namespace App\Facades;

use App\Kernel\Dashboard as Dash;

use Illuminate\Support\Facades\Facade;

/**
 * Class Dashboard.
 */
class Dashboard extends Facade
{
    /**
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return Dash::class;
    }
}
