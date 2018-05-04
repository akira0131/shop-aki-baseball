
@switch($layouts)
    
    {{-- ログイン画面 --}}
    @case('auth')

        {{-- jQuery 3 for bootstrap 3 --}}
        <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

        {{-- Bootstrap 3.3.7 --}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        @break

    {{-- ホーム --}}
    {{-- ダッシュボード --}}
    @case('dashboard')

        {{-- jQuery 3 for bootstrap 3系 --}}
        <script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

        {{-- Bootstrap 3.3.7 --}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        {{-- Plugins --}}
        <!-- jquery.validate + select2 -->
        <script src="{{ asset('la-assets/plugins/jquery-validation/jquery.validate.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('la-assets/plugins/select2/select2.full.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('la-assets/plugins/bootstrap-datetimepicker/moment.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('la-assets/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.js') }}" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <!--<script src="{{ asset('la-assets/js/app.min.js') }}" type="text/javascript"></script>-->
        <script src="{{ asset('la-assets/plugins/stickytabs/jquery.stickytabs.js') }}" type="text/javascript"></script>
        <script src="{{ asset('la-assets/plugins/slimScroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

        {{-- Theme Js 2.3.2 --}}
        <script src="{{ asset('plugins/adminlte/app.min.js') }}" type="text/javascript"></script>
        @break
@endswitch

{{-- Custom CSS for application --}}
<script src="{{ mix('js/app.js') }}" ype="text/javascript"></script>

{{-- Custom Js for pages --}}
@yield('js')