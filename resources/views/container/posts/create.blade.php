@extends('dashboard::layouts.dashboard')
@section('title',$type->name)
@section('description',$type->description)
@section('navbar')
    <ul class="nav justify-content-end  v-center"  role="tablist">

        @if($locales->count() > 1)
            <li class="nav-item dropdown">
                <a href="#"
                   class="nav-link dropdown-toggle text-uppercase padder-v"
                   data-toggle="dropdown"
                   role="button"
                   aria-haspopup="true"
                   aria-expanded="false">
                    <i class="icon-globe m-r-xs"></i> <span id="code-local">{{key(reset($locales))}}</span>
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">

                    @foreach($locales as $code => $lang)
                            <a class="dropdown-item" data-target="#local-{{$code}}"
                               role="tab"
                               data-toggle="tab"
                               onclick="document.getElementById('code-local').innerHTML = '{{$code}}'"
                               aria-controls="local-{{$code}}"
                               aria-expanded="@if ($loop->first)true @else false @endif">{{$lang['native']}}
                            </a>
                    @endforeach
                </div>
            </li>
        @endif

			<li  class="nav-item">
                <button type="submit"
                        onclick="window.dashboard.validateForm('post-form','{{trans('dashboard::common.alert.validate')}}')"
                        form="post-form"
                        class="btn btn-sm btn-link"><i class="sli icon-check fa-2x"></i></button>
            </li>

        </ul>
@stop
@section('content')
    <div class="app-content-body app-content-full" id="post">
    <!-- hbox layout  -->
        <form class="hbox hbox-auto-xs no-gutters" id="post-form"  method="post"
              action="{{route('dashboard.posts.type.store',['type' => $type->slug])}}" enctype="multipart/form-data">
        @if(count($type->fields()) > 0)
            <!-- column  -->
                <div class="hbox-col lter b-r">
                    <div class="vbox">
                        <div class="bg-white">
                            <div class="tab-content @if(!$type->checkModules()) container @endif">
                                @foreach($locales as $code => $lang)
                                    <div class="tab-pane @if ($loop->first) active  @endif" id="local-{{$code}}">
                                        <div class="wrapper-lg bg-white">
                                            {!! generate_form($type->fields(), [], $code, 'content') !!}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /column  -->
        @endif
        @if($type->checkModules())
            <!-- column  -->
                <div class="hbox-col wi-col lter">
                    <div class="vbox">
                        <div class="nav-tabs-alt">
                            @if(count($type->render() ) > 1)
                                <ul class="nav nav-tabs bg-light">
                                @foreach($type->render() as $name => $view)
										<li class="nav-item ">
                                        <a class="nav-link @if ($loop->first) active @endif" data-target="#module-{{$loop->iteration}}" role="tab" data-toggle="tab"
                                           aria-expanded="true">{{$name}}</a>
                                    </li>
                                    @endforeach
                            </ul>
                            @endif
                        </div>
                        <div class="row-row">
                            <div class="tab-content">
                                @foreach($type->render() as $name => $view)
                                    <div class="tab-pane @if($loop->first) active @endif"
                                         id="module-{{$loop->iteration}}" >
                                        {!! $view !!}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /column  -->
            @endif
            @csrf
        </form>
        <!-- /hbox layout  -->
    </div>


@stop
