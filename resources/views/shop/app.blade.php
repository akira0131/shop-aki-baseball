<!DOCTYPE html>
{{-- ブラウザに日本語のサイトと認識させるためにlang属性をつける --}}
<html lang="{{ App::getLocale() }}">

{{-- HTML HEADER --}}
@component('partials.components.htmlHeader')
    @slot('layouts', 'shop')
@endcomponent

<body data-spy="scroll" data-target=".onpage-navigation" data-offset="60"> 
    
    <div class="page-loader">
        <div class="loader">Loading...</div>
    </div>
                        
    {{-- ナビゲーション --}}
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top navbar-transparent" role="navigation">
        @include('layouts.shop.navbar')
    </nav>
        
    {{-- カルーセル --}}
    @if(Request::path() == '/')
    <section class="home-section home-fade home-full-height" id="home"> 
        <div class="hero-slider">
            @include('layouts.shop.caption')
        </div>
    </section>
    @endif

    {{-- コンテンツ --}}
    @yield('content')

    {{-- フッター --}}
    @include('layouts.shop.footer')

    <div class="scroll-up"><a href="#totop"><i class="fa fa-angle-double-up"></i></a></div>

    {{-- Js --}}
    @include('partials.components.js')
</body>
</html>
