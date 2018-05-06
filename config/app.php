<?php

return [

    /*
    |--------------------------------------------------------------------------
    | アプリケーション名
    |--------------------------------------------------------------------------
    |
    | ここにはアプリケーション名を指定します。この名前は
    | 通知時にアプリケーション名をフレームワークが必要な場合や、
    | アプリケーションやパッケージが必要としている場合に使用されます。
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーション環境
    |--------------------------------------------------------------------------
    |
    | この値により現在実行中のアプリケーションの「環境」が決まります。
    | これらの値はアプリケーションで活用する様々なサービスを好み通りに
    | 設定するために使用します。".env"ファイルに値を設定してください。
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションデバッグモード
    |--------------------------------------------------------------------------
    |
    | アプリケーションをデバッグモードにすると、アプリケーションでエラーが発生する
    | たびにスタックトレースともに、詳細なエラーメッセージが表示されます。
    | このモードでない場合、シンプルで一般利用者向きなエラーページが表示されます。
    |
    */

    'debug' => env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションURL
    |--------------------------------------------------------------------------
    |
    | このURLはArtisanコマンドラインツールを使用する時に正しい
    | URLを生成するために使用します。アプリケーションのルートのURLを設定してください。
    | Artisanコマンドを実行する時に使用されます。
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    /*
    |--------------------------------------------------------------------------
    | アプリケーションタイムゾーン
    |--------------------------------------------------------------------------
    |
    | ここではアプリケーションのデフォルトタイムゾーンを指定します。これは
    | PHPの日付／時間関数で使用されます。最初から未設定でも使用できるように
    | 適切なデフォルトを設定してあります。
    |
    */

    'timezone' => 'Asia/Tokyo',

    /*
    |--------------------------------------------------------------------------
    | アプリケーションローカル設定
    |--------------------------------------------------------------------------
    |
    | アプリケーションローカルは翻訳サービスプロバイダにより使用される
    | デフォルトローカルを指定します。アプリケーションで提供するローカルを
    | 自由に設定してください。
    |
    */

    'locale' => 'ja',

    /*
    |--------------------------------------------------------------------------
    | アプリケーションフォールバック言語
    |--------------------------------------------------------------------------
    |
    | フォールバック言語は現在のローカルが使用できない場合に、
    | 代替として使われます。アプリケーション全体に対して用意されている
    | 言語フォルダーに対応するコードであればどれでも使用可能です。
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | 暗号化キー
    |--------------------------------------------------------------------------
    |
    | このキーはIlluminate暗号化サービスで使用されます。ランダムな32文字を
    | セットしないと安全ではありません。アプリケーションをデプロイ
    | る前に、必ず変更してください。
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | 自動ロードされるサービスプロバイダ
    |--------------------------------------------------------------------------
    |
    | ここにリストしたサービスプロバイダはアプリケーションのリクエストに対し
    | 自動的にロードされます。アプリケーションの機能を拡張するため、この配列へ
    | 自由に自分のサービスを付け加えてください。
    |
    */

    'providers' => [

        /*
         * Laravelフレームワークサービスプロバイダ
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * パッケージのサービスプロバイダ
         */
        Barryvdh\Debugbar\ServiceProvider::class,
        Laravel\Socialite\SocialiteServiceProvider::class,

        /*
         * アプリケーションサービスプロバイダ
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\FoundationServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | クラスエイリアス
    |--------------------------------------------------------------------------
    |
    | このクラスエイリアスの配列はこのアプリケーションが開始されると登録されます。
    | エイリアスをどんなに好きなだけ自由に登録しても、「遅延」ロードされるので、
    | パフォーマンスを妨げることはありません。
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,
        'Debugbar' => Barryvdh\Debugbar\Facade::class,
        'Socialite' => Laravel\Socialite\Facades\Socialite::class,
        'Dashboard' => App\Facades\Dashboard::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Headless
    |--------------------------------------------------------------------------
    |
    | If the dashboard is turned true, then all routes stop working,
    | this is required if you are building your control panel or you do not need it
    |
    */

    'headless' => false,

    /*
    |--------------------------------------------------------------------------
    | Sub-Domain Routing
    |--------------------------------------------------------------------------
    |
    | You can use the admin panel on a separate subdomain.
    | For example: 'admin.example.com'
    |
    */

    //'domain' => env('DASHBOARD_DOMAIN', dashboard_domain()),

    /*
    |--------------------------------------------------------------------------
    | Route Prefixes
    |--------------------------------------------------------------------------
    |
    | This prefix method can be used for the prefix of each
    | route in the administration panel. For example, you can change to 'admin'
    |
    */

    'prefix' => env('DASHBOARD_PREFIX', 'dashboard'),

    /*
    |--------------------------------------------------------------------------
    | ルーティングルールの「middleware」
    |--------------------------------------------------------------------------
    |
    | Provide a convenient mechanism for filtering HTTP
    | requests entering your application.
    |
    */

    'middleware' => [
        'public'  => ['web'],
        'private' => ['web', 'dashboard'],
    ],

    /*
    |--------------------------------------------------------------------------
    | Auth
    |--------------------------------------------------------------------------
    |
    | Available settings
    |
    */

    'auth' => [
        'display' => true,
        'image'   => '/img/background.jpg',
        'slogan'  => 'dashboard::auth/account.slogan',
    ],

    /*
    |--------------------------------------------------------------------------
    | Locales
    |--------------------------------------------------------------------------
    |
    | Localization of records
    |
    */

    'locales' => [
        'en' => [
            'name'     => 'English',
            'script'   => 'Latn',
            'dir'      => 'ltr',
            'native'   => 'English',
            'regional' => 'en_GB',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Available fields to form templates
    |--------------------------------------------------------------------------
    |
    | Declared fields for user filling.
    | Be shy and add to what you need
    |
    */

    'fields' => [
        'textarea'     => Orchid\Platform\Fields\Types\TextAreaField::class,
        'input'        => Orchid\Platform\Fields\Types\InputField::class,
        'list'         => Orchid\Platform\Fields\Types\ListField::class,
        'tags'         => Orchid\Platform\Fields\Types\TagsField::class,
        'select'       => Orchid\Platform\Fields\Types\SelectField::class,
        'relationship' => Orchid\Platform\Fields\Types\RelationshipField::class,
        'place'        => Orchid\Platform\Fields\Types\PlaceField::class,
        'picture'      => Orchid\Platform\Fields\Types\PictureField::class,
        'datetime'     => Orchid\Platform\Fields\Types\DateTimerField::class,
        'checkbox'     => Orchid\Platform\Fields\Types\CheckBoxField::class,
        'code'         => Orchid\Platform\Fields\Types\CodeField::class,
        'wysiwyg'      => Orchid\Platform\Fields\Types\TinyMCEField::class,
        'password'     => Orchid\Platform\Fields\Types\PasswordField::class,
        'markdown'     => Orchid\Platform\Fields\Types\SimpleMDEField::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Single Behaviors
    |--------------------------------------------------------------------------
    |
    | Static pages
    |
    */

    'single' => [
        App\Behaviors\Demo\Page::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Many Behaviors
    |--------------------------------------------------------------------------
    |
    | An abstract pattern of behavior record
    |
    */

    'many' => [
        Orchid\Platform\Behaviors\Demo\Post::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Common Behaviors
    |--------------------------------------------------------------------------
    */

    'common' => [
        'user'     => Orchid\Platform\Behaviors\Base\UserBase::class,
        'category' => Orchid\Platform\Behaviors\Base\CategoryBase::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Available menu
    |--------------------------------------------------------------------------
    |
    | Marked menu areas
    |
    */

    'menu' => [
        'header'  => 'Header menu',
        'sidebar' => 'Sidebar menu',
        'footer'  => 'Footer menu',
    ],

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [
        'media'      => 'public',
    ],

    /*
    |--------------------------------------------------------------------------
    | Images
    |--------------------------------------------------------------------------
    |
    | Image processing 100x150x75
    | 100 - integer width
    | 150 - integer height
    | 75  - integer quality
    |
    */

    'images' => [
        'low'    => [
            'width'   => '50',
            'height'  => '50',
            'quality' => '50',
        ],
        'medium' => [
            'width'   => '600',
            'height'  => '300',
            'quality' => '75',
        ],
        'high'   => [
            'width'   => '1000',
            'height'  => '500',
            'quality' => '95',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Attachment types
    |--------------------------------------------------------------------------
    |
    | Grouping attachments by file extension type
    |
    */

    'attachment' => [
        'image' => [
            'png',
            'jpg',
            'jpeg',
            'gif',
        ],
        'video' => [
            'mp4',
            'mkv',
        ],
        'docs'  => [
            'doc',
            'docx',
            'pdf',
            'xls',
            'xlsx',
            'xml',
            'txt',
            'zip',
            'rar',
            'svg',
            'ppt',
            'pptx',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Dashboard Widgets
    |--------------------------------------------------------------------------
    |
    | Widgets that will be displayed on the main screen
    |
    */

    'main_widgets' => [
        App\Http\Widgets\UpdateWidget::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Dashboard Resource
    |--------------------------------------------------------------------------
    |
    | Automatically connect the stored links. For example js and css files
    |
    */

    'resource' => [
        'stylesheets' => [],
        'scripts'     => [],
    ],

];
