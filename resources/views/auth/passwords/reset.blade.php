@extends('auth.app')

@section('htmlheader_title')
    パスワード reset
@endsection

@section('content')

    {{-- ログインロゴ --}}
    @component('components.login_field')
        @slot('field', 'login_logo')
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
        <p class="login-box-msg">Reset パスワード</p>
        <form action="{{ url('/password/reset') }}" method="post">

            {{-- CSRFトークン --}}
            @component('components.login_field')
                @slot('field', 'csrf_token')
            @endcomponent

            {{-- トークン --}}
            @component('components.login_field')
                @slot('field', 'token')
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
                <div class="col-xs-2"></div>
                <div class="col-xs-8">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Reset password</button>
                </div>
                <div class="col-xs-2"></div>
            </div>
        </form>

        <a href="{{ url('/login') }}">Log in</a><br>
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