{{--
カルーセル
--}}
@php
    $caption = [
        "shop/slider1.png",
        "shop/slider3.png",
    ];
@endphp

<ul class="slides">
    @foreach($caption as $value)
    <li class="bg-dark-30 bg-dark shop-page-header" style="background-image:url(&quot;{{ asset('vendor/images').'/'.$value }}&quot;);">
        <div class="titan-caption">
            <div class="caption-content">
                <div class="font-alt mb-30 titan-title-size-1">Sub Title</div>
                <div class="font-alt mb-30 titan-title-size-4">Title</div>
                <div class="font-alt mb-40 titan-title-size-1">Description</div>
                <a class="btn btn-border-w btn-round section-scroll" href="#">Learn More</a>
            </div>
        </div>
    </li>
    @endforeach
</ul>
