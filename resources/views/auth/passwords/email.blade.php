@extends('auth.app')

@section('htmlheader_title')
    パスワード recovery
@endsection

@section('content')

    {{-- ログインロゴ --}}
    @component('components.login_field')
        @slot('field', 'login-logo')
    @endcomponent

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif

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
        <p class="login-box-msg">{{ trans('message.resetPassword') }}</p>
        <form action="{{ url('/password/email') }}" method="post">
            
            {{-- トークン --}}
            @component('components.login_field')
                @slot('field', 'csrf-token')
            @endcomponent

            {{-- メールアドレス入力欄(送信用) --}}
            @component('components.login_field')
                @slot('field', 'send-mailadress-field')
            @endcomponent

            <div class="row">
                <div class="col-xs-2"></div>
                <div class="col-xs-8">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ trans('message.resetPasswordLink') }}</button>
                </div>
                <div class="col-xs-2"></div>
            </div>
        </form>
    </div>
@endsection

@component('components.js')
    @slot('screen', 'auth')
@endcomponent