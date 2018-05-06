<?php

/*
|--------------------------------------------------------------------------
| Post APIルート
|--------------------------------------------------------------------------
|
| ここでアプリケーションのAPIルートを登録します。これらの
| ルートはRouteServiceProviderによりロードされ、"api"ミドルウェア
| グループにアサインされます。API構築を楽しんでください！
|
*/

$this->group([
    'middleware' => ['api'],
    'prefix'     => 'api',
    'namespace'  => 'Orchid\Platform\Http\Controllers\Api',
], function ($router) {
});
