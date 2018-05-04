@extends('auth.app')

@section('htmlheader_title')
    登録
@endsection

@section('body-tag', 'hold-transition')

@section('content')

    <div class="register-logo">
        <a href="{{ url('/home') }}"><b>{{ config('laraadmin.sitename2')[0] }} </b>{{ config('laraadmin.sitename2')[1] }}</a>
    </div>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        {!! trans('message.somproblems') !!}<br><br>
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif

    <div class="register-box-body">
        <p class="login-box-msg">登録 Super Admin</p>
        <form action="{{ url('/register') }}" method="post">

            {{-- トークン --}}
            @component('components.login_field')
                @slot('field', 'csrf_token')
            @endcomponent

            {{-- 表示名入力欄 --}}
            @component('components.login_field')
                @slot('field', 'show_user_name')
            @endcomponent

            {{-- メールアドレス入力欄(送信用) --}}
            @component('components.login_field')
                @slot('field', 'send_mailadress_field')
            @endcomponent

            {{-- パスワード入力欄 --}}
            @component('components.login_field')
                @slot('field', 'password_field')
            @endcomponent

            {{-- パスワード入力欄(確認) --}}
            @component('components.login_field')
                @slot('field', 'confirm_password_field')
            @endcomponent

            <div class="row">
                
                {{--  --}}
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> I agree to the terms
                        </label>
                    </div>
                </div>

                {{--  --}}
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登録</button>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('js')
    <script src="{{ asset('/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
@endsection