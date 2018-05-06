<?php

namespace App\Kernel;

use App\Menu\Menu;
use App\Access\Permissions;

use Illuminate\Support\Collection;

class Dashboard
{
    /**
     * APPLICATION Version.
     */
    const VERSION = '1.0.0';

    /**
     * @var
     */
    public $menu = null;

    /**
     * Permission for applications.
     *
     * @var null
     */
    public $permission = null;

    /**
     * @var array
     */
    public $storage = null;

    /**
     * JS and CSS resources for implementation in the panel.
     *
     * @var array
     */
    public $resources = [
        'stylesheets' => [],
        'scripts'     => [],
    ];

    /**
     * Dashboard constructor.
     */
    public function __construct()
    {
        $this->menu = new Menu();
        $this->permission = new Permissions();
        $this->storage = collect();
    }

    /**
     * Get the version number of the application.
     *
     * @return string
     */
    public static function version() : string
    {
        return static::VERSION;
    }

    /**
     * ルーティングルールの「prefix」
     *
     * @param $path
     * @return string
     */
    public static function prefix($path = '') : string
    {
        $prefix = config('platform.prefix');

        return $prefix.$path;
    }

    /**
     * Register storage of data.
     *
     * @param                  $property
     * @param StorageInterface $storage
     */
    public function registerStorage($property, StorageInterface $storage)
    {
        $this->storage->put($property, $storage);
    }

    /**
     * @param string $key
     * @param string $value
     */
    public function registerResource(string $key, string $value)
    {
        array_push($this->resources[$key], $value);
    }

    /**
     * Return Storage.
     *
     * @param      $key
     * @param null $default
     *
     * @return mixed
     */
    public function getStorage($key, $default = null)
    {
        return $this->storage->get($key, $default);
    }

    /**
     * @return null|Menu
     */
    public function menu() : Menu
    {
        return $this->menu;
    }

    /**
     * Return Property.
     *
     * @param $property
     *
     * @return mixed
     */
    public function getProperty($property)
    {
        return $this->$property;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getPermission() : Collection
    {
        return $this->permission->get();
    }
}
