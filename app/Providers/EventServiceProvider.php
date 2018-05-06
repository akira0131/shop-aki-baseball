<?php

namespace App\Providers;

use App\Events\CommentEvent;
use App\Events\CategoryEvent;
use App\Events\SettingsEvent;
use App\Events\Systems\UserEvent;
use App\Events\Systems\RolesEvent;
use App\Listeners\Category\CategoryBaseLister;
use App\Listeners\Category\CategoryDescLister;
use App\Listeners\Comment\CommentBaseListener;
use App\Listeners\Settings\SettingBaseListener;
use App\Listeners\Settings\SettingInfoListener;
use App\Listeners\Systems\Roles\RoleBaseListener;
use App\Listeners\Systems\Users\UserBaseListener;
use App\Listeners\Systems\Users\LogSuccessfulLogin;
use App\Listeners\Systems\Users\UserAccessListener;

use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        RolesEvent::class    => [
            RoleBaseListener::class,
        ],
        UserEvent::class     => [
            UserBaseListener::class,
            UserAccessListener::class,
        ],
        Login::class         => [
            LogSuccessfulLogin::class,
        ],
        SettingsEvent::class => [
            SettingInfoListener::class,
            SettingBaseListener::class,
        ],
        CategoryEvent::class => [
            CategoryBaseLister::class,
            CategoryDescLister::class,
        ],
        CommentEvent::class  => [
            CommentBaseListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot()
    {
        parent::boot();
    }
}
