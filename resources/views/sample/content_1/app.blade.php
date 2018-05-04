<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ app()->getLocale() }}">

{{-- HTML HEADER --}}
@section('html_header')
    @component('components.html_header')
        @slot('layouts', 'dashboard')
    @endcomponent
@show

<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="skin-white fixed {{ $sidebar_mini or '' }}" bsurl="{{ url('') }}" adminRoute="{{ config('laraadmin.adminRoute') }}">
    <div class="wrapper">

        {{-- ナビゲーションバー --}}
        @include('layouts.dashboard.navbar')

        {{-- サイドバー --}}
        @include('layouts.dashboard.sidebar')

        <div class="content-wrapper">
        
            {{-- コンテンツヘッダー --}}
            @if(!isset($no_header))
                @include('layouts.dashboard.content_header')
            @endif
        
            {{-- メインコンテンツ --}}
            <section class="content {{ $no_padding or '' }}">
                <!-- Your Page Content Here -->
                @yield('main-content')
            </section>
        </div>

        {{-- コントロールサイドバー --}}
        @include('layouts.dashboard.control_sidebar')

        {{-- フッター --}}
        @include('layouts.dashboard.footer')
    </div>

    @include('la.layouts.partials.file_manager')

    {{-- Js --}}
    @section('scripts')
        @component('components.js')
            @slot('layouts', 'dashboard')
        @endcomponent
    @show
</body>
</html>
