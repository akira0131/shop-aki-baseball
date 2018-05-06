<?php

/*
|--------------------------------------------------------------------------
| Auth Webルート
|--------------------------------------------------------------------------
|
| 詳細：laravel/framework/src/Illuminate/Routing/Router.php::auth()
|
*/

$this->domain(config('platform.domain'))->group(function () {
    $this->group([
        'middleware' => config('platform.middleware.public'),
        'prefix'     => \App\Kernel\Dashboard::prefix(),
        'namespace'  => 'App\Http\Controllers\Auth',
    ], function (\Illuminate\Routing\Router $router) {
        if (config('platform.auth.display', true)) {
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
