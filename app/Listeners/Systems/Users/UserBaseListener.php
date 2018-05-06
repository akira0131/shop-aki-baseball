<?php

namespace App\Listeners\Systems\Users;

use App\Http\Forms\Systems\Users\BaseUserForm;

class UserBaseListener
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
        return BaseUserForm::class;
    }
}
