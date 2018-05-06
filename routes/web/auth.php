<?php

/*
|--------------------------------------------------------------------------
| Auth Webルート
|--------------------------------------------------------------------------
|
| ここでアプリケーションのWebルートを登録できます。"web"ルートは
| ミドルウェアのグループの中へ、RouteServiceProviderによりロード
| contains the "web" middleware group. Now create something great!
|
*/

$this->domain(config('app.domain'))->group(function () {
    $this->group([
        'middleware' => config('app.middleware.public'),
        'prefix'     => \App\Kernel\Dashboard::prefix(),
        'namespace'  => 'App\Http\Controllers\Auth',
    ], function (\Illuminate\Routing\Router $router) {
        if (config('app.auth.display', true)) {
            // Authentication Routes...
            $router->get('login', 'LoginController@showLoginForm')->name('dashboard.login');
            $router->post('login', 'LoginController@login')->name('dashboard.login.auth');

            // Password Reset Routes...
            $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('dashboard.password.request');
            $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('dashboard.password.email');
            $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('dashboard.password.reset');
            $this->post('password/reset', 'ResetPasswordController@reset');
        }

        $router->post('logout', 'LoginController@logout')->name('dashboard.logout');
    });
});
