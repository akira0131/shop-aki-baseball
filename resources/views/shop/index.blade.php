{{--
uri:/
controller:TopController@index
--}}
@extends('shop.app')

{{-- ヘッダータイトル --}}
@section('htmlheader_title')
    {{ trans('dashboard::common.title') }}
@endsection

{{-- コンテンツ --}}
@section('content')

{{-- 仮データ --}}
@php
    $category = [
        "カテゴリ1" => "クラブ・ミット","カテゴリ2" => "クラブ用メンテナンス用品",
        "カテゴリ3" => "公式ボール","カテゴリ4" => "バット",
        "カテゴリ5" => "バット用アクセサリー","カテゴリ6" => "ウェア",
        "カテゴリ7" => "プロテクター・ヘルメット","カテゴリ8" => "練習用品",
    ];
    $maker = [
        "client-logo-dark-1.png",
        "client-logo-dark-2.png",
        "client-logo-dark-3.png",
        "client-logo-dark-4.png",
        "client-logo-dark-5.png",
    ];
    $ranking = [
        'product-1.jpg','product-2.jpg',
        'product-3.jpg','product-4.jpg',
        'product-5.jpg','product-6.jpg',
    ]
@endphp

{{-- 商品をジャンルから選ぶ --}}
<div class="container module-small">

    <div class="row">
        <div class="col-sm-12 align-center">
            <h2 class="module-title font-alt text-center">商品をジャンルから選ぶ</h2>
        </div>
    </div>
    
    <div class="row multi-columns-row">

        @foreach($category as $value)
        <div class="col-sm-6 col-md-3 col-lg-3">    
            <div class="shop-item">

                {{-- カテゴリー画像(665x750) --}}
                <div class="shop-item-image">
                    <img src="{{ asset('vendor/images/shop/product-7.jpg') }}" alt="Category Pictures"/>
                </div>

                {{-- カテゴリー名 --}}
                <h4 class="shop-item-title font-alt"><a href="#">{{ $value }}</a></h4>
                価格
            </div>
        </div>
        @endforeach
    </div>
  
    <div class="row mt-30">
        <div class="col-sm-12 align-center">
            <a class="btn btn-b btn-round" href="#">すべてを見る</a>
        </div>
    </div>
</div>
    

{{-- 売れ筋ランキング --}}
<div class="container module">
    
    <div class="row">        
        <div class="col-sm-12 align-center">
            <h2 class="module-title font-alt">売れ筋ランキング</h2>
                <div class="module-subtitle font-serif">説明文</div>
            </div>
        </div>
        
    <div class="row">
        <div class="owl-carousel text-center" data-items="5" data-pagination="false" data-navigation="false">        
            
            @foreach($ranking as $value)
            <div class="owl-item">
                <div class="col-sm-12">
                    <div class="ex-product">
                        <a href="#"><img src="{{ asset('vendor/images/shop').'/'.$value }}" alt="Leather belt"/></a>
                        <h4 class="shop-item-title font-alt"><a href="#">Leather belt</a></h4>£12.00
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- 商品をメーカーから選ぶ --}}
<div class="container module">

    <div class="row">
        <div class="col-sm-12 align-center">
            <h2 class="module-title font-alt">商品をメーカーから選ぶ</h2>
        </div>
    </div>

    <div class="row">

        {{-- カルーセル --}}
        <div class="owl-carousel text-center" data-items="6" data-pagination="false" data-navigation="false">
        
            @foreach($maker as $value)
            <div class="">

                {{-- バナー画像(400x300) --}}
                <div class="col-sm-12 client-logo">
                    <a href="#"><img src="{{ asset('vendor/images').'/'.$value }}" alt="Client Logo"/></a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{ asset('vendor/lib/wow/dist/wow.js') }}"></script>
<script src="{{ asset('vendor/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js') }}"></script>
<script src="{{ asset('vendor/lib/isotope/dist/isotope.pkgd.js') }}"></script>
<script src="{{ asset('vendor/lib/imagesloaded/imagesloaded.pkgd.js') }}"></script>
<script src="{{ asset('vendor/lib/flexslider/jquery.flexslider.js') }}"></script>
<script src="{{ asset('vendor/lib/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('vendor/lib/smoothscroll.js') }}"></script>
<script src="{{ asset('vendor/lib/magnific-popup/dist/jquery.magnific-popup.js') }}"></script>
<script src="{{ asset('vendor/lib/simple-text-rotator/jquery.simple-text-rotator.min.js') }}"></script>
<script src="{{ asset('vendor/js/plugins.js') }}"></script>
<script src="{{ asset('vendor/js/main.js') }}"></script>
@endpush

@push('stylesheets')

@endpush
