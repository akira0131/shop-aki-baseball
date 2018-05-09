{{-- サイドバー --}}

<nav class="navi clearfix">
    <ul class="nav flex-column" role="tablist">

        {{--
        <li class="nav-item">
            <a href="#" class="nav-link click" data-toggle="open" title="Menu" data-target="#aside">
                <i class="icon-menu" aria-hidden="true"></i>
            </a>
        </li>
        --}}

        {{-- ダッシュボードのリダイレクトボタン --}}
        <li class="nav-item">
            <a href="/{{ Dashboard::prefix() }}" class="navbar-brand nav-link text-lt w-full">
                <img src="{{ asset('/img/logo.svg') }}" width="50px">
            </a>
        </li>

        {!! Dashboard::menu()->render('Main') !!}

    </ul>

    <ul class="nav nav-footer-fix">
        <li>
            {{-- ログアウトボタン --}}
            <a href="{{ route('dashboard.logout') }}"
               onclick="event.preventDefault();document.getElementById('logout-form').submit();"
               dusk="logout-button">
              <i class="icon-logout" aria-hidden="true"></i>
                <span>{{ trans('dashboard::auth/account.sign_out') }}</span>
            </a>
            <form id="logout-form" class="hidden" action="{{ route('dashboard.logout') }}" method="POST">
                @csrf
            </form>
        </li>
    </ul>
</nav>
