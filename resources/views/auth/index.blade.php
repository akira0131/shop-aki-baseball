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
                @slot('field', 'csrf-token')
            @endcomponent

            {{-- メールアドレス入力欄(サインイン用) --}}
            @component('components.login_field')
                @slot('field', 'sigin-mailaddress-field')
            @endcomponent

            {{-- パスワード入力欄 --}}
            @component('components.login_field')
                @slot('field', 'password-field')
            @endcomponent

            <div class="row">
                <!-- サインイン情報キャッシュボタン -->
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember"> {{ trans('message.siginRemember') }}
                        </label>
                    </div>
                </div>
                <!-- サインインボタン -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('message.siginButton') }}</button>
                </div>
            </div>
        </form>

        {{-- SNS認証リンク --}}
        @component('components.login_field')
            @slot('field', 'social-login-link')
        @endcomponent

        <a href="{{ url('/password/reset') }}">{{ trans('message.forgotPassword') }}</a><br>
        <a href="{{ url('/register') }}" class="text-center">{{ trans('message.registerMember') }}</a>
    </div>
@endsection

@component('components.js')
    @slot('screen', 'auth')
@endcomponent