<?php

namespace App\Providers;

use App\Models\Page;
use App\Models\Post;
use App\Models\Role;
use App\Models\Category;
use App\Widget\WidgetContractInterface;
use App\Http\Middleware\AccessMiddleware;

use Base64Url\Base64Url;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * この名前空間はコントローラルートへ適用されます。
     *
     * さらに、URLジェネレーターのルート名前空間としても設定されます。
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * ルートモデル結合、パターンフィルターなどを定義
     *
     * @return void
     */
    public function boot()
    {
        Route::middlewareGroup('dashboard', [
            AccessMiddleware::class,
        ]);

        $this->binding();

        parent::boot();
    }

    /**
     * Route binding.
     */
    public function binding()
    {
        Route::bind('role', function ($value) {
            if (is_numeric($value)) {
                return Role::where('id', $value)->firstOrFail();
            }

            return Role::where('slug', $value)->firstOrFail();
        });

        Route::bind('category', function ($value) {
            if (is_numeric($value)) {
                return Category::where('id', $value)->firstOrFail();
            }

            return Category::findOrFail($value);
        });

        Route::bind('type', function ($value) {
            $post = new Post();
            $type = $post->getBehavior($value)->getBehaviorObject();

            return $type;
        });

        Route::bind('widget', function ($value) {
            try {
                $widget = app()->make(Base64Url::decode($value));
            } catch (\Exception $exception) {
                return abort(404);
            }

            if (! is_a($widget, WidgetContractInterface::class)) {
                return abort(404);
            }

            return $widget;
        });

        Route::bind('page', function ($value) {
            if (is_numeric($value)) {
                $page = Page::where('id', $value)->first();
            } else {
                $page = Page::where('slug', $value)->first();
            }
            if (is_null($page)) {
                return new Page([
                    'slug' => $value,
                ]);
            }

            return $page;
        });

        Route::bind('post', function ($value) {
            if (is_numeric($value)) {
                return Post::where('id', $value)->firstOrFail();
            }

            return Post::where('slug', $value)->firstOrFail();
        });
    }

    /**
     * アプリケーションのルートを定義
     *   "Web"ルート定義：
     *     これらのルートではすべて、セッション状態、CSRF保護などを受ける
     *   "api"ルート定義：
     *     通常、これらのルートはステートレス
     *
     * @return void
     */
    public function map()
    {
        if (config('app.headless')) {
            return;
        }

        foreach (glob(DASHBOARD_PATH.'/routes/*/*.php') as $file) {
            $this->loadRoutesFrom($file);
        }
    }
}
