<?php

namespace App\Listeners\Settings;

use App\Http\Forms\Settings\InfoForm;

class SettingInfoListener
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
        return InfoForm::class;
    }
}
