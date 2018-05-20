{{-- ナビゲーション --}}

{{-- 仮データ --}}
@php
    $navigation = [
        '商品の選び方' => [
            'クラブ・ミット'  => [
                'ピッチャー用','キャッチャー用','ファースト用',
            ],
            'クラブ・マット'  => [
                'ピッチャー用','キャッチャー用','ファースト用',
            ],
    ]];
@endphp

<style>
{{-- ナビゲーション項目のcontent打ち消し --}}
.dropdown-toggle:after {
    border-top: 0px;
}
{{-- ナビゲーションバーの縦幅を狭くする --}}
.navbar {
    padding: 0px 1px;
}
{{-- ドロップダウン項目の縦幅を狭くする --}}
.navbar-custom.dropdown-menu > li > a {
    padding: 9px 9px;
}
{{-- ナビゲーションバーの重なり --}}
.ul.dropdown-menu {

}

{{-- マウスカーソル時の挙動 --}}

</style>

<div class="container">
    <a class="navbar-brand" href="#">{{ config('app.name') }}</a>

    {{-- レスポンシブ --}}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#custom-collapse" aria-controls="custom-collapse" aria-expanded="false" aria-label="ナビゲーションの切替">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div id="custom-collapse" class="collapse navbar-collapse justify-content-end">
        <ul class="nav navbar-nav">

            @foreach($navigation as $menu => $categories)
            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">{{ $menu }}</a>
                <ul class="dropdown-menu" role="menu">

                    @foreach($categories as $category => $items)
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown">{{ $category }}</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                            @foreach($items as $item)
                            <li><a class="dropdown-item" href="#">{{ $item }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </li>
            @endforeach
        </ul>
    </div>
</div>
