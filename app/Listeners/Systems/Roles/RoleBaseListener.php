<?php

namespace App\Listeners\Systems\Roles;

use App\Http\Forms\Systems\Roles\BaseRolesForm;

class RoleBaseListener
{
    /**
     * Handle the event.
     *
     * @return string
     *
     * @internal param RolesEvent $event
     */
    public function handle() : string
    {
        return BaseRolesForm::class;
    }
}
