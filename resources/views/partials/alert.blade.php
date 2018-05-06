@if (session()->has('flash_notification.message'))
    <div class="alert alert-{{ session('flash_notification.level') }} m-b-none">
        <button type="button"
                class="close"
                data-dismiss="alert"
                aria-hidden="true">&times;
        </button>
        {!! session('flash_notification.message') !!}

        @yield('flash_notification.sub_message')
    </div>
@endif
<div id="dashboard-alerts"></div>
