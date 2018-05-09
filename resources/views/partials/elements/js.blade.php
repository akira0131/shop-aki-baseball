{{-- Custom Js for application(Bootstrap4) --}}
<script src="{{ mix('/js/app.js') }}" type="text/javascript"></script>

{{-- Custom Js for pages at platform.php --}}
@foreach(Dashboard::getProperty('resources')['scripts'] as $scripts)
    <script src="{{ $scripts }}" type="text/javascript"></script>
@endforeach

{{-- Custom Js for pages at blade --}}
@yield('js')
