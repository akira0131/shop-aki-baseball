@extends('auth.app')

@section('htmlheader_title')
    Log in
@endsection

@section('body-tag', 'hold-transition')

@section('content')

    {{-- ログインロゴ --}}
    @component('components.login_field')
        @slot('field', 'login-logo')
    @endcomponent

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

    <div class="login-box-body">
        <p class="login-box-msg">{{ trans('message.siginSession') }}</p>
        <form action="{{ url('/login') }}" method="post">

            {{-- トークン --}}
            @component('components.login_field')
                @slot('field', 'csrf_token')
            @endcomponent

            {{-- メールアドレス入力欄(サインイン用) --}}
            @component('components.login_field')
                @slot('field', 'sigin_mailaddress_field')
            @endcomponent

            {{-- パスワード入力欄 --}}
            @component('components.login_field')
                @slot('field', 'password_field')
            @endcomponent

            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> {{ trans('message.siginRemember') }}
                        </label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('message.siginButton') }}</button>
                </div>
            </div>
        </form>

        {{-- SNS認証リンク --}}
        @component('components.login_field')
            @slot('field', 'social_login_link')
        @endcomponent

        <a href="{{ url('/password/reset') }}">{{ trans('message.forgotPassword') }}</a><br>
        <a href="{{ url('/register') }}" class="text-center">{{ trans('message.registerMember') }}</a>
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