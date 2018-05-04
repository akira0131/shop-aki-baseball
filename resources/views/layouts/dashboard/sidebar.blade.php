{{-- Sidebar --}}
<aside class="main-sidebar">

    <section class="sidebar">

        {{-- ユーザー情報パネル --}}
        @if (! Auth::guest() && Auth::guest())
            @component('components.dashboard_field')
                @slot('field', 'user-panel')
            @endcomponent
        @endif

        {{-- 検索フォーム --}}
        @component('components.dashboard_field')
            @slot('field', 'search_form')
        @endcomponent

        {{-- メニューリスト --}}
        @component('components.dashboard_field')
            @slot('field', 'menu_list')
        @endcomponent

    </section>
</aside>