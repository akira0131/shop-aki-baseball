<?php

namespace App\Events\Systems;

use Illuminate\Queue\SerializesModels;
use App\Http\Forms\Systems\Roles\RoleFormGroup;

class RolesEvent
{
    use SerializesModels;

    /**
     * @var
     */
    protected $form;

    /**
     * Create a new event instance.
     * SomeEvent constructor.
     *
     * @param RoleFormGroup $form
     */
    public function __construct(RoleFormGroup $form)
    {
        $this->form = $form;
    }
}
