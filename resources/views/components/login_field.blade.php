
@switch($field)

    {{-- ログインロゴ --}}
    @case('login-logo')
        <div class="login-logo">
            <a href="{{ url('/home') }}"><b>{{ config('laraadmin.sitename2')[0] }} </b>{{ config('laraadmin.sitename2')[1] }}</a>
        </div>
        @break

    {{-- トークン --}}
    @case('csrf-token')
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @break

    {{-- メールアドレス入力欄(サインイン用) --}}
    @case('sigin-mailaddress-field')
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="{{ trans('message.email') }}" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        @break

    {{-- メールアドレス入力欄(送信用) --}}
    @case('send-mailadress-field')
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="{{ trans('message.email') }}" name="email" value="{{ old('email') }}"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        @break

    {{-- パスワード入力欄 --}}
    @case('password-field')
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="{{ trans('message.password') }}" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        @break

    {{-- SNS認証リンク --}}
    @case('social-login-link')
        <div class="social-auth-links text-center">
            <p>{{ trans('message.siginSocial') }}</p>
            <a href="{{ url('/oauth/twitter') }}" class="btn btn-block btn-social btn-twitter btn-flat"><i class="fa fa-twitter"></i> {{ trans('message.signTwitter') }}</a>
            <a href="{{ url('/oauth/facebook') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> {{ trans('message.signFacebook') }}</a>
            <a href="{{ url('/oauth/line') }}" class="btn btn-block btn-social btn-linkedin btn-flat"><i class="fa fa-linkedin"></i> {{ trans('message.signLine') }}</a>
        </div>
        @break
@endswitch