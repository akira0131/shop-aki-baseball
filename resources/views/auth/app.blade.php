<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="{{ app()->getLocale() }}">

{{-- HTML HEADER --}}
@component('components.html_header')
    @slot('layouts', 'auth')
@endcomponent

<body class="@yield('body-tag') login-page">
    <div class="login-box">
        @yield('content')
    </div>

    {{-- Js --}}
    @component('components.js')
        @slot('layouts', 'auth')
    @endcomponent
</body>
</html>