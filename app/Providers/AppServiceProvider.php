<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * アプリケーションサービスの初期化処理
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * アプリケーションサービスの登録
     *
     * @return void
     */
    public function register()
    {
        //foreach (glob(sprintf('%s/Support/*.php', app_path())) as $helper_file){
        //    require_once($helper_file);
        //}
        //foreach (glob(DASHBOARD_PATH.'/Support/*.php') as $helperFile) {
        //    require_once($helperFile);
        //}
    }
}
