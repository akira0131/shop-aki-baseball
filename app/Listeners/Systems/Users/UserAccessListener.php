<?php

namespace App\Listeners\Systems\Users;

use App\Http\Forms\Systems\Users\AccessUserForm;

class UserAccessListener
{
    /**
     * Handle the event.
     *
     * @return string
     *
     * @internal param UserEvent $event
     */
    public function handle() : string
    {
        return AccessUserForm::class;
    }
}
