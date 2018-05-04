<head>
    <meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="robots" content="noindex, nofollow, noarchive">

    <title>{{ config('business.sitename') }} | @hasSection('htmlheader_title')@yield('htmlheader_title')@endif</title>

    @switch($layouts)
        {{-- ホーム --}}
        {{-- ダッシュボード --}}
        @case('dashboard' or 'auth')

            {{-- StyleSheet --}}
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">

            {{-- Theme CSS --}}
            <link href="{{ asset('css/AdminLTE.min.css') }}" rel="stylesheet" type="text/css">
            <link href="{{ asset('css/skins/' . config('business.theme_adminlte') . '.min.css') }}" rel="stylesheet" type="text/css">
            <link href="{{ asset('plugins/iCheck/square/' . config('business.theme_icheck') . '.css') }}" rel="stylesheet" type="text/css" />

            {{-- Plugins --}}

            @break
    @endswitch

    {{-- Custom CSS for application --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">

    {{-- Custom CSS for pages --}}
    @yield('style')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
