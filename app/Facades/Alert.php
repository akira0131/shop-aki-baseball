<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;
use App\Alert\Alert as AlertClass;

/**
 * Class Alert.
 */
class Alert extends Facade
{
    /**
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return AlertClass::class;
    }
}
