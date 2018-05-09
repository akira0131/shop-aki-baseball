{{--
uri: GET dashboard/systems/roles
controller: Systems\RoleController@index
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
<div class="text-right">
    <div class="btn-group" role="group">
        <a href="{{ route('dashboard.systems.roles.create')}}" class="btn btn-link">
            <i class="sli icon-plus fa-2x"></i>
        </a>
    </div>
</div>
@endsection

{{-- コンテンツ --}}
@section('main_content')
<section>
    <div class="bg-white-only bg-auto no-border-xs">

        {{--  --}}
        @if($roles->count() > 0)
        <div class="table-responsive">
            <table class="table table-striped">
                
                {{--  --}}
                <thead>
                    <tr>
                        <th class="w-xs">{{ trans('common.Manage') }}</th>
                        <th>{{ trans('systems/roles.name') }}</th>
                        <th>{{ trans('systems/roles.slug') }}</th>
                        <th>{{ trans('common.Last edit') }}</th>
                    </tr>
                </thead>

                {{--  --}}
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <td class="text-center">
                            <a href="{{ route('dashboard.systems.roles.edit',$role->slug) }}">
                                <i class="icon-menu"></i>
                            </a>
                        </td>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->slug }}</td>
                        <td>{{ $role->updated_at or $role->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <footer class="card-footer">
            <div class="row">
                <div class="col-sm-5">
                    <small class="text-muted inline m-t-sm m-b-sm">
                        {{ trans('common.show') }}
                        {{ ($roles->currentPage()-1)*$roles->perPage()+1 }} -
                        {{ ($roles->currentPage()-1)*$roles->perPage()+count($roles->items()) }}
                        {{ trans('common.of')}} {!! $roles->total() !!}
                        {{ trans('common.elements') }}
                    </small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    {!! $roles->links('partials.components.pagination') !!}
                </div>
            </div>
        </footer>
        
        {{--  --}}
        @else
        <div class="jumbotron text-center bg-white not-found">
            <div>
                <h3 class="font-thin">{{ trans('systems/roles.not_found') }}</h3>
                <a href="{{ route('dashboard.systems.roles.create')}}"
                   class="btn btn-link">{{ trans('systems/roles.create') }}</a>
            </div>
        </div>
        @endif
    </div>
</section>
@endsection
