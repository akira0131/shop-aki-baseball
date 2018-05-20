{{-- Custom Js for application(Bootstrap4) --}}
@loadAsset('/js/app.js')

{{-- Custom Js for pages at platform.php --}}
@foreach(Dashboard::getProperty('resources')['scripts'] as $scripts)
    <script src="{{ $scripts }}" type="text/javascript"></script>
@endforeach

{{-- Custom Js for pages at blade --}}
@stack('js')
