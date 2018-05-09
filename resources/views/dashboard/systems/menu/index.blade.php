{{--
uri: GET dashboard/systems/menu
controller: Systems\MenuController@index
--}}
@extends('dashboard::dashboard.app')

{{-- ヘッダータイトル --}}
@section('htmlheader_title')
    {{ trans('dashboard::menu.systems') }}
@endsection

{{-- コンテンツタイトル --}}
@section('content_title')
    {{ trans('dashboard::systems/menu.title') }}
@endsection

{{-- コンテンツ説明文 --}}
@section('content_description')
    {{ trans('dashboard::systems/menu.description') }}
@endsection

{{-- コンテンツ --}}
@section('main_content')
<section>
    <div class="bg-white-only bg-auto no-border-xs">
        
    {{-- アクセス可能なメニューを表示 --}}
    @if($menu->count() > 0)
        <div class="jumbotron text-center bg-white not-found">
            <div>
                <h3 class="font-thin">{{ trans('dashboard::systems/menu.description') }}</h3>
                <ul class="text-left">
                    
                @foreach ($menu as $key => $value)
                    <li>
                        <a href="{{ route('dashboard.systems.menu.show',$key) }}">{{ $value }}</a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>

    {{-- アクセス可能なメニューが存在しない場合は、メッセージを表示 --}}
    @else
        <div class="jumbotron text-center bg-white not-found">
            <div>
                <h3 class="font-thin">{{ trans('dashboard::systems/menu.not_found') }}</h3>
            </div>
        </div>
    @endif
    </div>
</section>
@endsection
