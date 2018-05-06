<?php

namespace App\Listeners\Settings;

use App\Http\Forms\Settings\BaseSettingsForm;

class SettingBaseListener
{
    /**
     * Handle the event.
     *
     * @return string
     *
     * @internal param SettingsEvent $event
     */
    public function handle() : string
    {
        return BaseSettingsForm::class;
    }
}
