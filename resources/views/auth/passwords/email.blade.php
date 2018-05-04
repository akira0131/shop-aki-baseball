@extends('auth.app')

@section('htmlheader_title')
    パスワード recovery
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
        <p class="login-box-msg">{{ trans('message.resetPassword') }}</p>
        <form action="{{ url('/password/email') }}" method="post">
            
            {{-- CSRFトークン --}}
            @component('components.login_field')
                @slot('field', 'csrf_token')
            @endcomponent

            {{-- メールアドレス入力欄(送信用) --}}
            @component('components.login_field')
                @slot('field', 'send_mailadress_field')
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