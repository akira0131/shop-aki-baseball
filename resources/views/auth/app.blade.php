<!DOCTYPE html>
{{-- ブラウザに日本語のサイトと認識させるためにlang属性をつける --}}
<html lang="{{ App::getLocale() }}">

{{-- HTML HEADER --}}
@component('partials.elements.html_header')
    @slot('layouts', 'auth')
@endcomponent
<body>
    <div class="login-wrapper">
        <div class="bg-pic">

            {{-- 背景画像 --}}
            <img src="{{ config('platform.auth.image') }}" alt="" class="lazy">

            <div class="bg-caption pull-bottom text-white wrapper-md m-b-md">
                
                {{--  --}}
                <h2 class="text-white">
                    {{ trans(config('platform.auth.slogan','dashboard::auth/account.slogan')) }}
                </h2>

                {{-- コピーライト --}}
                <p class="small">
                    {{ trans('dashboard::auth/account.image-license') }}<br>
                    © 2018 - {{ date('Y') }}
                </p>
            </div>
        </div>

        <div class="login-container bg-white b-l b-l-light">
            <div class="padder-lg m-t-lg">

                {{-- ロゴ --}}
                <img src="{{ asset('/img/logo.svg') }}" alt="logo" 
                                                        data-src="assets/img/logo.png"
                                                        data-src-retina="assets/img/logo_2x.png"
                                                        height="22">
                {{-- サイト名 --}}
                {{--
                <p>{{ config('app.name') }}</p>
                --}}

                {{-- コンテンツ --}}
                @yield('main_content')

                <div class="pull-bottom">
                    <div class="m-b-lg clearfix v-center">

                        {{-- ロゴ --}}
                        <div class="col-sm-3 col-md-2">
                            <img alt="ORCHID"
                                 class="m-t-xs"
                                 src="{{ asset('/img/logo.svg') }}"
                                 width="78"
                                 height="22"></a>
                        </div>

                        {{-- ライセンス --}}
                        <div class="col-sm-9 no-padding">
                            <p class="m-l-md">
                                <small>
                                    License & Source Code<br>
                                    Freely available under the MIT. <br>
                                    The source is available on <a href="https://github.com/akira0131/shop-aki-baseball"
                                                                  class="text-info"
                                                                  target="_blank"
                                                                  rel="noopener noreferrer">GitHub</a>.
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Js --}}
    @include('partials.elements.js')
</body>
</html>
