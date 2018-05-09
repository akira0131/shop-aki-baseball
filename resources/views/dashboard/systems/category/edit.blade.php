{{--
uri: GET dashboard/systems/category/{catehory}/edit
controller: Systems\CategoryController@edit
--}}
@extends('dashboard::dashboard.app')

{{-- ヘッダータイトル --}}
@section('htmlheader_title')
    {{ trans('dashboard::menu.systems') }}
@endsection

{{-- コンテンツタイトル --}}
@section('content_title')
    {{ $name }}
@endsection

{{-- コンテンツ説明文 --}}
@section('content_description')
    {{ $description }}
@endsection

{{-- コントロールナビゲーション --}}
@section('control_navbar')
<ul class="nav justify-content-end  v-center"  role="tablist">
    
    {{--  --}}
    <li class="nav-item">
        <button type="submit"
                onclick="window.dashboard.validateForm('form-group','{{ trans('dashboard::common.alert.validate') }}')"
                form="form-group"
                class="btn btn-link btn-save"><i class="sli icon-check fa-2x"></i></button>
    </li>

    {{--  --}}
    <li class="nav-item">
        <button type="submit" form="form-group-remove"
                class="btn btn-link" @if($method == 'GET') disabled @endif><i class="sli icon-trash fa-2x"></i></button>
    </li>

</ul>
@endsection

{{-- コンテンツ --}}
@section('main_content')

@if(count($forms) > 1)
 <div class="nav-tabs-alt bg-white-only">
     <ul class="nav nav-tabs padder bg-light" role="tablist">
         
        {{-- タブメニュー --}}
        @foreach($forms as $name => $form)
        <li class="nav-item">
            <a class="nav-link @if ($loop->first) active @endif" data-target="#tab-{{str_slug($name)}}"
               role="tab" data-toggle="tab">
                {!! $name !!}
            </a>
        </li>
        @endforeach
     </ul>
 </div>
@endif

{{-- フォーム --}}
<section>
    <div class="bg-white-only bg-auto no-border-xs">
        
        {{-- 親カテゴリ --}}
        <form class="form-horizontal" id="form-group" action="{{route($route,$slug)}}" method="post"
              enctype="multipart/form-data">
            <div class="tab-content">
            
            @foreach($forms as $name => $form)
                <div role="tabpanel" class="tab-pane @if ($loop->first) active @endif" id="tab-{{ str_slug($name) }}">
                    {!! $form !!}
                </div>
            @endforeach
            </div>
            @csrf
            @method($method)
        </form>

        {{-- リンク --}}
        <form id="form-group-remove" action="{{ route($route,$slug) }}" method="POST">
            @csrf
            @method('delete')
        </form>
    </div>
</section>
@endsection
