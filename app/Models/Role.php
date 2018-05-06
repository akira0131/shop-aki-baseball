<?php

namespace App\Models;

use App\Access\RoleAccess;
use App\Access\RoleInterface;
use App\Traits\FilterTrait;

use Illuminate\Database\Eloquent\Model;

class Role extends Model implements RoleInterface
{
    use RoleAccess, FilterTrait;

    /**
     * @var string
     */
    protected $table = 'roles';

    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'slug',
        'permissions',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'permissions' => 'array',
    ];

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
