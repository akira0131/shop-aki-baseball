<!DOCTYPE html>
<html>
    @include('la.layouts.partials.htmlheader')
    <body class="@yield('body-tag') login-page">
        <div class="login-box">
            @yield('content')
        </div>
        @yield('script')
    </body>
</html>