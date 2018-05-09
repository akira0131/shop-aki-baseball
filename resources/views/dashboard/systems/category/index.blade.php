{{--
uri: GET dashboard/systems/category
controller: Systems\CategoryController@index
--}}
@extends('dashboard::dashboard.app')

{{-- ヘッダータイトル --}}
@section('htmlheader_title')
    {{ trans('menu.systems') }}
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
<ul class="nav justify-content-end v-center" role="tablist">

    {{-- 新規作成ボタン --}}
    <li class="nav-item">
        <a href="{{ route('dashboard.systems.category.create') }}" class="btn btn-link">
            <i class="sli icon-plus fa-2x"></i>
        </a>
    </li>
</ul>
@endsection

{{-- コンテンツ --}}
@section('main_content')
<section>
    <div class="bg-white-only bg-auto no-border-xs">

    {{--  --}}
    @if($category->count() > 0)

        @include('partials.components.filter')

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="w-xs">{{ trans('common.Manage') }}</th>
                        <th>{{ trans('systems/category.name') }}</th>

                        @foreach($behavior->grid() as $th)
                        <th width="{{ $th->width }}">{{ $th->title }}</th>
                        @endforeach
                    </tr>
                </thead>
                
                <tbody>
                @foreach ($category as $item)
                    <tr>

                        {{-- 編集ページへのリンク --}}
                        <td class="text-center">
                            <a href="{{ route('dashboard.systems.category.edit',$item->id) }}">
                                <i class="icon-menu"></i>
                            </a>
                        </td>
                        <td>{{ $item->term->getContent('name') }}</td>

                        @foreach($behavior->grid() as $td)
                        <td>
                            @if(!is_null($td->render))
                                {!! $td->handler($item->term) !!}
                            @else
                                {{ $item->term->getContent($td->name) }}
                            @endif
                        </td>
                        @endforeach
                    </tr>

                    @include('container.systems.category.item',[
                        'item' => $item->allChildrenTerm,
                        'delimiter' => '- '
                    ])

                @endforeach
                </tbody>
            </table>
        </div>

        <footer class="card-footer">
            <div class="row">
                <div class="col-sm-5">
                    <small class="text-muted inline m-t-sm m-b-sm">
                    {{ trans('common.show') }}
                    {{ ($category->currentPage()-1)*$category->perPage()+1 }} -
                    {{ ($category->currentPage()-1)*$category->perPage()+count($category->items()) }}
                    {{ trans('common.of') }} {!! $category->total() !!}
                    {{ trans('common.elements') }}</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    {!! $category->links('partials.components.pagination') !!}
                </div>
            </div>
        </footer>

    {{--  --}}
    @else
        <div class="jumbotron text-center bg-white not-found">
            <div>
                <h3 class="font-thin">{{ trans('systems/category.not_found') }}</h3>
            </div>
        </div>
    @endif
    </div>
</section>
@endsection
