{{--
uri:
controller:
--}}
@extends('dashboard::dashboard.app')

{{-- ヘッダータイトル --}}
@section('htmlheader_title')
    {{ trans('dashboard::common.title') }}
@endsection

{{-- コンテンツタイトル --}}
@section('content_title')
    {{ trans('dashboard::common.title') }}
@endsection

{{-- コンテンツ説明 --}}
@section('content_description')
    {{ trans('dashboard::common.description') }}
@endsection

{{-- コンテンツ --}}
@section('main_content')
    @foreach($widgets as $widget)
        {!! (new $widget)->handler() !!}
    @endforeach
@endsection

{{-- Js --}}
@push('js')
<script>
    var activeMenu = false;
    $('#aside-wrap-list').children('.tab-pane').each(function () {
        if($(this).hasClass('active')){
            activeMenu = true;
        }
    });
    if(!activeMenu){
        $('#menu-notifications').addClass('active')
    }
</script>
@endpush
