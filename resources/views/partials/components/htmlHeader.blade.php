<head>
    {{--  --}}
    <meta charset="utf-8">
    {{-- IEの互換モードを防ぐ指定。これをユーザーがONすると古いドキュメントモードで表示されてしまう。元々はIE8で古いサイトを見ると崩れてしまうため、後方互換させるために実装されたもの --}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{-- スマートフォン用のビューポートの指定。widthはdevice-widthにしてレスポンシブにする --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@hasSection('htmlheader_title')@yield('htmlheader_title') | @endif{{ config('app.name') }}</title>

    {{-- CSRF(クロスサイト・リクエスト・フォージェリの略)。ログイン時にセッションを作成し、POST時にセッションチェックを行う --}}
    <meta name="csrf_token" content="{{ csrf_token() }}">
    
    {{-- Custom CSS for application(Bootstrap4) --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}"> --}}

    {{-- Icon Image --}}
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="{{ asset('/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('/favicon/manifest.json') }}">
    <link rel="mask-icon" href="{{ asset('/favicon/safari-pinned-tab.svg') }}" color="#1a2021">

    {{-- アプリケーション情報 --}}
    <meta name="apple-mobile-web-app-title" content="{{ config('app.name') }}">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="theme-color" content="#ffffff">

    @loadAsset('/css/app.css')

    @switch($layouts)
        {{-- ログイン --}}
        @case('auth')

            {{-- 謎 --}}
            <meta name="dashboard-prefix" content="{{ Dashboard::prefix() }}">
            <meta name="description" content="Laravel Platform application provides a very flexible and extensible way of building your custom application.">
            <meta property="og:title" content="@yield('title', config('app.name'))"/>
            <meta property="og:type" content="website"/>
            <meta property="og:url" content="{{ url()->current() }}"/>
            <meta property="og:image" content="{{ config('content.image','/img/background.jpg') }}"/>
            @break
        {{-- ショップ --}}
        @case('shop')

            <!-- Template specific stylesheets-->
            <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
            <link href="{{ asset('/vendor/lib/animate.css/animate.css') }}" rel="stylesheet">
            <link href="{{ asset('/vendor/lib/components-font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
            <link href="{{ asset('/vendor/lib/et-line-font/et-line-font.css') }}" rel="stylesheet">
            <link href="{{ asset('/vendor/lib/flexslider/flexslider.css') }}" rel="stylesheet">
            <link href="{{ asset('/vendor/lib/owl.carousel/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
            <link href="{{ asset('/vendor/lib/owl.carousel/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
            <link href="{{ asset('/vendor/lib/magnific-popup/dist/magnific-popup.css') }}" rel="stylesheet">
            <link href="{{ asset('/vendor/lib/simple-text-rotator/simpletextrotator.css') }}" rel="stylesheet">
            <!-- Main stylesheet and color file-->
            <link href="{{ asset('vendor/css/style.css') }}" rel="stylesheet">
            <link id="color-scheme" href="{{ asset('/vendor/css/colors/default.css') }}" rel="stylesheet">
            @break

        {{-- ダッシュボード --}}
        @case('dashboard')

            {{-- 謎 --}}
            <meta name="auth" content="{{ Auth::check() }}">
            <meta name="turbolinks-root" content="/{{ Dashboard::prefix() }}">
            <meta name="dashboard-prefix" content="{{ Dashboard::prefix() }}">
    
            {{-- 外部ドメイン名（ホスト名）の名前解決（DNSルックアップ）を事前に強制し、読み込み時間の短縮を図る --}}
            <meta http-equiv="X-DNS-Prefetch-Control" content="on"/>
            <link rel="dns-prefetch" href="{{ config('app.url') }}"/>
            <link rel="dns-prefetch" href="https://fonts.googleapis.com"/>
            @break
    @endswitch

    {{-- Custom CSS for pages at platform.php --}}
    @foreach(Dashboard::getProperty('resources')['stylesheets'] as $stylesheet)
        <link rel="stylesheet" href="{{ $stylesheet }}">
    @endforeach

    {{-- Custom CSS for pages at blade --}}
    @stack('stylesheets')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
