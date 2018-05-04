{{-- Navbar --}}
<header class="main-header">

    {{-- Logo --}}
    <a href="{{ url(config('laraadmin.adminRoute')) }}" class="logo">
        <span class="logo-mini">{!! config('business.logo_mini') !!}</span>
        <span class="logo-lg">{!! config('business.logo_lg') !!}</span>
    </a>

    {{-- Header Navbar --}}
    <nav class="navbar navbar-static-top" role="navigation">

        {{-- Sidebar toggle button--}}
        <a href="#" class="sidebar-toggle b-l" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        {{-- Navbar Right Menu --}}
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                {{-- メッセージメニュー --}}
                @component('components.dashboard_field')
                    @slot('field', 'messages_menu')
                @endcomponent
                
                {{-- 通知メニュー --}}
                @component('components.dashboard_field')
                    @slot('field', 'notifications_menu')
                @endcomponent

                {{-- チケットメニュー --}}
                @component('components.dashboard_field')
                    @slot('field', 'ticketits_menu')
                @endcomponent
                
                {{-- ユーザアカウントメニュー --}}
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    @component('components.dashboard_field')
                        @slot('field', 'user_menu')
                    @endcomponent
                @endif

                {{-- Control Sidebar Toggle Button --}}
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>