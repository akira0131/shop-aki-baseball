<?php

namespace App\Models;

use App\Access\UserAccess;
use App\Access\UserInterface;
use App\Traits\FilterTrait;
use App\Traits\MultiLanguage;
use App\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements UserInterface
{
    use Notifiable, UserAccess, MultiLanguage, FilterTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'last_login',
        'avatar',
        'permissions',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'permissions' => 'array',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string $token
     *
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPassword($token));
    }

    /**
     * Set permission as boolean.
     *
     * @param  string  $value
     * @return void
     */
    public function setPermissionsAttribute($permissions)
    {
        foreach ($permissions as $key => $value) {
            $permissions[$key] = boolval($value);
        }
        $this->attributes['permissions'] = json_encode($permissions ?? []);
    }
}
