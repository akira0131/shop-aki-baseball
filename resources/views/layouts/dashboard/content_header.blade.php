{{-- コンテンツヘッダー --}}

{{-- Navbar header --}}
<div class="navbar-header bg-black dk v-center">

    <button class="pull-left click" data-toggle="open" title="Menu" data-target="#aside">
        <i class="icon-menu"></i>
    </button>

    {{-- brand --}}
    <a href="{{ route('dashboard.index') }}" class="navbar-brand text-lt center">
        <img src="{{ asset('/img/logo.svg') }}" width="50px">
    </a>

    <button class="pull-right"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        <i class="icon-logout"></i>
    </button>
</div>

{{-- navbar collapse  --}}
<div class="app-header wrapper navbar-collapse box-shadow bg-white-only v-center">

    <div class="col-xs-12 col-md-6">

        {{-- コンテンツタイトル --}}
        <h1 class="m-n font-thin h3 text-black">@yield('content_title')</h1>
        
        {{-- コンテンツ説明文 --}}
        <small class="text-muted text-ellipsis">@yield('content_description')</small>
    </div>

    <div class="col-xs-12 col-md-6">

        {{-- コントロールナビゲーション --}}
        @yield('control_navbar')
    </div>
</div>
