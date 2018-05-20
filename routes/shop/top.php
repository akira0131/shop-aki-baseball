<?php

/*
|--------------------------------------------------------------------------
| System Webルート
|--------------------------------------------------------------------------
|
| ここでアプリケーションのWebルートを登録できます。"web"ルートは
| ミドルウェアのグループの中へ、RouteServiceProviderによりロード
| contains the "web" middleware group. Now create something great!
|
*/

$this->domain(config('platform.domain'))->group(function () {
   $this->group([
       'middleware' => config('platform.middleware.puplic'),
       'prefix'     => '/',
       'namespace'  => 'App\Http\Controllers',
   ], function (\Illuminate\Routing\Router $router) {
       $router->get('/', [
           //'as'   => 'Top.index',
           'uses'  => 'TopController@index',
       ]);
   });
});

//Route::get('/', 'TopController@index');