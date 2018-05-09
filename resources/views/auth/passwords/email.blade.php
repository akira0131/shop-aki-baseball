{{--
uri: GET dashboard/password/reset
controller: Auth\FogetPasswordController@showLinkRequestForm
--}}
@extends('dashboard::auth.app')

{{-- コンテンツ --}}
@section('main_content')
<p class="m-t-lg">Reset パスワード</p>

@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif

<form class="m-t-md" role="form" method="POST" action="{{ route('dashboard.password.email') }}">
@csrf
    
    {{-- ログインID入力欄 --}}
    <div class="form-group form-group-default {{ $errors->has('email') ? ' has-error' : '' }}">
        <label>Email</label>
        <div class="controls">
            <input type="email" name="email" placeholder="{{trans('dashboard::auth/account.enter_email')}}"
                    class="form-control" required
                    value="{{ old('email') }}">

            @if ($errors->has('email'))
            <span class="form-text text-muted">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>

    {{-- パスワード再送ボタン --}}    
    <button class="btn btn-default btn-block m-t-md" type="submit">
        <i class="icon-envelope text-xs m-r-xs"></i> Send パスワード Reset Link
    </button>
</form>
@endsection
