{{-- メインメニュー --}}

<nav class="navi clearfix">
    <div class="nav tab-content flex-column" id="aside-wrap-list">
        @include('dashboard::partials.messages.notifications')
        {!! Dashboard::menu()->render('Main','dashboard::partials.screen.leftSubMenu') !!}
    </div>
</nav>
