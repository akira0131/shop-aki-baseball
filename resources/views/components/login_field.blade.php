
@switch($field)

    {{-- ログインロゴ --}}
    @case('login_logo')
        <div class="login-logo">
            <a href="{{ url('/home') }}"><b>{{ config('laraadmin.sitename2')[0] }} </b>{{ config('laraadmin.sitename2')[1] }}</a>
        </div>
        @break

    {{-- CSRFトークン --}}
    @case('csrf_token')
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @break

    {{-- トークン --}}
    @case('token')
        <input type="hidden" name="token" value="{{ $token }}">
        @break


{{-- Form --}}

    {{-- 表示名入力欄 --}}
    @case('show_user_name')
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Full name" name="name" value="{{ old('name') }}"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        @break

    {{-- メールアドレス入力欄(サインイン用) --}}
    @case('sigin_mailaddress_field')
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="{{ trans('message.email') }}" name="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        @break

    {{-- メールアドレス入力欄(送信用) --}}
    @case('send_mailadress_field')
        <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="{{ trans('message.email') }}" name="email" value="{{ old('email') }}"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        @break

    {{-- パスワード入力欄 --}}
    @case('password_field')
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="{{ trans('message.password') }}" name="password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        @break

    {{-- パスワード入力欄(確認) --}}
    @case('confirm_password_field')
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="{{ trans('message.retypePassword') }}" name="password_confirmation"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        @break

    {{-- SNS認証リンク --}}
    @case('social_login_link')
        <div class="social-auth-links text-center">
            <p>{{ trans('message.siginSocial') }}</p>
            <a href="{{ url('/oauth/twitter') }}" class="btn btn-block btn-social btn-twitter btn-flat"><i class="fa fa-twitter"></i> {{ trans('message.signTwitter') }}</a>
            <a href="{{ url('/oauth/facebook') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> {{ trans('message.signFacebook') }}</a>
            <a href="{{ url('/oauth/line') }}" class="btn btn-block btn-social btn-linkedin btn-flat"><i class="fa fa-linkedin"></i> {{ trans('message.signLine') }}</a>
        </div>
        @break
@endswitch