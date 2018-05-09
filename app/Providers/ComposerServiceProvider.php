<?php

namespace App\Providers;

use App\Http\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

// ビューにオブジェクトを渡すアプリケーションサービス
class ComposerServiceProvider extends ServiceProvider
{
    /**
     * プロバイダのローディングを遅延させるフラグ
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * プロバイダの初期化処理
     *
     * Usge:
     * View::composer(ビューテンプレートへのパス[継承元], オブジェクト)
     *
     * @internal param Dashboard $dashboard
     */
    public function boot()
    {
        // ダッシュボード
        View::composer([
            'dashboard::dashboard.app',
            ], MenuComposer::class
        );
    }
}
