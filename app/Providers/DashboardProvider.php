<?php

namespace App\Providers;

use App\Kernel\Dashboard;
use App\Fields\FieldStorage;
use App\Behaviors\Storage\ManyBehaviorStorage;
use App\Behaviors\Storage\SingleBehaviorStorage;
use Illuminate\Support\ServiceProvider;

class DashboardProvider extends ServiceProvider
{
    /**
     * Boot the platform.ication events.
     *
     * @param Dashboard $dashboard
     */
    public function boot(Dashboard $dashboard)
    {
        $dashboard->registerStorage('fields', new FieldStorage);
        $dashboard->registerStorage('pages', new SingleBehaviorStorage);
        $dashboard->registerStorage('posts', new ManyBehaviorStorage);

        foreach (config('platform.resource.stylesheets', []) as $stylesheet) {
            $dashboard->registerResource('stylesheets', $stylesheet);
        }

        foreach (config('platform.resource.scripts', []) as $script) {
            $dashboard->registerResource('scripts', $script);
        }
    }
}
