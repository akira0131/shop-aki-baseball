<?php

namespace App\Providers;

use App\Console\Commands\MakeRows;
use App\Console\Commands\MakeChart;
use App\Console\Commands\MakeTable;
use App\Console\Commands\MakeFilter;
use App\Console\Commands\MakeScreen;
use App\Console\Commands\MakeWidget;
use App\Console\Commands\MakeManyBehavior;
use App\Console\Commands\PublicLinkCommand;
use App\Console\Commands\CreateAdminCommand;
use App\Console\Commands\MakeSingleBehavior;

use Illuminate\Support\ServiceProvider;

class ConsoleServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * The available command shortname.
     *
     * @var array
     */
    protected $commands = [
        CreateAdminCommand::class,
        MakeManyBehavior::class,
        MakeSingleBehavior::class,
        MakeFilter::class,
        PublicLinkCommand::class,
        MakeWidget::class,
        MakeRows::class,
        MakeScreen::class,
        MakeTable::class,
        MakeChart::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        foreach ($this->commands as $command) {
            $this->commands($command);
        }
    }
}
