@extends('sample.content_1.app')

{{-- Page title --}}
@section('htmlheader_title')
    Dashboard
@endsection

{{-- Content header --}}
@section('contentheader_title')
    Dashboard
@endsection

{{-- Content hreader description --}}
@section('contentheader_description')
    Organisation Overview
@endsection

@section('main-content')
    <section class="content">

        {{-- Small box --}}
        @component('components.sample.content_1')
            @slot('content', 'small_box')
        @endcomponent

        <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">

                {{-- Custom tabs (Charts with tabs) --}}
                @component('components.sample.content_1')
                    @slot('content', 'chart_tab')
                @endcomponent

                {{-- Chat box --}}
                @component('components.sample.content_1')
                    @slot('content', 'caht_box')
                @endcomponent

                {{-- Todo list --}}
                @component('components.sample.content_1')
                    @slot('content', 'todo_list')
                @endcomponent

                {{-- Quick mail widget --}}
                @component('components.sample.content_1')
                    @slot('content', 'quick_mail_widget')
                @endcomponent

            </section><!-- /.Left col -->

            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">

                {{-- Map box --}}
                @component('components.sample.content_1')
                    @slot('content', 'map_box')
                @endcomponent

                {{-- Solid sales graph --}}
                @component('components.sample.content_1')
                    @slot('content', 'solid_sales_graph')
                @endcomponent

                {{-- Calendar --}}
                @component('components.sample.content_1')
                    @slot('content', 'calendar')
                @endcomponent

            </section><!-- right col -->
        </div><!-- /.row (main row) -->
    </section><!-- /.content -->
@endsection

@push('style')
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset('la-assets/plugins/morris/morris.css') }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset('la-assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}">
    <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset('la-assets/plugins/datepicker/datepicker3.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('la-assets/plugins/daterangepicker/daterangepicker-bs3.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('la-assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
@endpush

@push('js')
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{ asset('la-assets/plugins/morris/morris.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('la-assets/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- jvectormap -->
    <script src="{{ asset('la-assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
    <script src="{{ asset('la-assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('la-assets/plugins/knob/jquery.knob.js') }}"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
    <script src="{{ asset('la-assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- datepicker -->
    <script src="{{ asset('la-assets/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('la-assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('la-assets/plugins/fastclick/fastclick.js') }}"></script>
    <!-- dashboard -->
    <script src="{{ asset('la-assets/js/pages/dashboard.js') }}"></script>
@endpush

@push('js')
    <script>
        (function($) {
            $('body').pgNotification({
                style: 'circle',
                title: 'LaraAdmin',
                message: "Welcome to LaraAdmin...",
                position: "top-right",
                timeout: 0,
                type: "success",
                thumbnail: '<img width="40" height="40" style="display: inline-block;" src="{{ Gravatar::fallback(asset('la-assets/img/user2-160x160.jpg'))->get(Auth::user()->email, 'default') }}" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">'
            }).show();
        })(window.jQuery);
    </script>
@endpush
