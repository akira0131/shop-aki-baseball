<?php

namespace App\Providers;

use App\Kernel\Dashboard;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;

class FoundationServiceProvider extends ServiceProvider
{
    /**
     * アプリケーションサービスの初期化処理
     */
    public function boot()
    {
        $this->app->singleton(Dashboard::class, function () {
            return new Dashboard();
        });
        $this->registerEloquentFactoriesFrom(realpath(DASHBOARD_PATH.'/database/factories'));
        $this->registerDatabase();
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->registerProviders();
    }

    /**
     * Register factories.
     *
     * @param $path
     */
    protected function registerEloquentFactoriesFrom($path)
    {
        $this->app->make(EloquentFactory::class)->load($path);
    }

    /**
     * Register migrate.
     */
    protected function registerDatabase()
    {
        $this->loadMigrationsFrom(realpath(DASHBOARD_PATH.'/database/migrations'));
    }

    /**
     * Register translations.
     */
    public function registerTranslations()
    {
        $this->loadTranslationsFrom(realpath(DASHBOARD_PATH.'/resources/lang'), 'dashboard');
    }

    /**
     * 設定ファイルを登録
     */
    protected function registerConfig()
    {
        $this->publishes([
            realpath(DASHBOARD_PATH.'/config/scout.php')    => config_path('scout.php'),
            realpath(DASHBOARD_PATH.'/config/platform.php') => config_path('platform.php'),
            realpath(DASHBOARD_PATH.'/config/widget.php')   => config_path('widget.php'),
        ]);

        $this->mergeConfigFrom(realpath(DASHBOARD_PATH.'/config/app.php'), 'app');
    }

    /**
     * ビューの登録
     *
     * Usge:
     * loadViewsFrom(ビューテンプレートへのパス, パッケージの名前)
     */
    public function registerViews()
    {
        if (config('platform.headless')) {
            return;
        }

        $this->loadViewsFrom(array_merge(array_map(function ($path) {
            return $path.'/vendor/orchid/dashboard';
        }, config('view.paths')), [
            DASHBOARD_PATH.'/resources/views',
        ]), 'dashboard');
    }

    /**
     * サービスプロバーダーの登録
     */
    public function registerProviders()
    {
        $provides = [
            AlertServiceProvider::class,
            WidgetServiceProvider::class,
            DashboardProvider::class,
            RouteServiceProvider::class,
            ConsoleServiceProvider::class,
            PermissionServiceProvider::class,
            EventServiceProvider::class,
            
            // ビューにオブジェクトを渡すサービスプロバーダー
            ComposerServiceProvider::class,
        ];

        foreach ($provides as $provide) {
            $this->app->register($provide);
        }
    }

    /**
     * サービスコンテナへの登録
     *
     * @return void
     */
    public function register()
    {
        if (! Route::hasMacro('screen')) {
            Route::macro('screen', function ($url, $screen, $name) {
                return Route::any($url.'/{method?}/{argument?}', "$screen@handle")->name($name);
            });
        }

        // 「__DIR__」の扱いが難しい
        if (! defined('DASHBOARD_PATH')) {
            define('DASHBOARD_PATH', realpath(__DIR__.'/../../'));
        }
    }
}
