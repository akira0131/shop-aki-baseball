<?php

/*
|--------------------------------------------------------------------------
| Dashboard Webルート
|--------------------------------------------------------------------------
|
| ここでアプリケーションのWebルートを登録できます。"web"ルートは
| ミドルウェアのグループの中へ、RouteServiceProviderによりロード
| contains the "web" middleware group. Now create something great!
|
*/

$this->domain(config('app.domain'))->group(function () {
    $this->group([
        'middleware' => config('app.middleware.private'),
        'prefix'     => \App\Kernel\Dashboard::prefix(),
        'namespace'  => 'App\Http\Controllers',
    ], function (\Illuminate\Routing\Router $router) {
        $router->get('/', [
            'as'   => 'dashboard.index',
            'uses' => 'DashboardController@index',
        ]);
    });
});
