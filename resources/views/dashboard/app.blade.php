<!DOCTYPE html>
{{-- ブラウザに日本語のサイトと認識させるためにlang属性をつける --}}
<html lang="{{ App::getLocale() }}">

{{-- HTML HEADER --}}
@component('partials.elements.html_header')
    @slot('layouts', 'dashboard')
@endcomponent

<body>
    <div id="app" class="app app-aside-fixed">

        {{-- header  --}}
        <header id="header" class="app-header navbar" role="menu">
        
            {{-- コンテンツヘッダー --}}
            @include('layouts.dashboard.content_header')
        </header>

        {{-- aside  --}}
        <aside id="aside" class="app-aside d-none d-md-block">
        
            <div class="aside-wrap-main">
                <div class="navi-wrap">

                    {{-- サイドバー --}}
                    @include('layouts.dashboard.sidebar')
                </div>
            </div>

            <div class="aside-wrap">
                <div class="navi-wrap">

                    {{-- メインメニュー --}}
                    @include('layouts.dashboard.main_menu')
                </div>
            </div>
        </aside>

        <div id="content" class="app-content" role="main">
            <div class="app-content-body" id="app-content-body">

                {{--  --}}
                @include('dashboard::partials.messages.alert')

                {{--  --}}
                @if(count($errors) > 0)
                    <div class="alert alert-danger m-b-none" role="alert">
                        <strong>Oh snap!</strong>
                        Change a few things up and try submitting again.
                        <ul class="m-t-xs">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- コンテンツ --}}
                @yield('main_content')
            </div>
        </div>
    </div>

    {{-- Js --}}
    @include('partials.elements.js')
</body>
</html>
