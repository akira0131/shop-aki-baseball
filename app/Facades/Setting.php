<?php

namespace App\Facades;

use App\Models\Setting as SettingModel;
use Illuminate\Support\Facades\Facade;

class Setting extends Facade
{
    /**
     * Model of Setting.
     *
     * @return mixed
     */
    protected static function getFacadeAccessor()
    {
        return SettingModel::class;
    }
}
