<?php

namespace App\Events\Systems\Roles;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Queue\SerializesModels;

class RemoveRoleEvent
{
    use SerializesModels;

    /**
     * The authenticated user.
     *
     * @var User
     */
    public $user;

    /**
     * Roles.
     *
     * @var Collection
     */
    public $roles;

    /**
     * Create a new event instance.
     *
     * @param $user
     * @param $role
     */
    public function __construct($user, $role)
    {
        $this->user = $user;

        if (is_array($role) || $role instanceof Collection) {
            $this->roles = collect($role);
        } else {
            $this->roles = collect($role);
        }
    }
}
