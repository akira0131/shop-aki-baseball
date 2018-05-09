{{--
uri:
controller:
--}}
@extends('dashboard::auth.app')

{{-- コンテンツ --}}
@section('main_content')
<p class="m-t-lg">Reset パスワード</p>

<form class="m-t-md" role="form" method="POST" action="{{ route('dashboard.password.email') }}">
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    <div class="form-group form-group-default {{ $errors->has('email') ? ' has-error' : '' }}">
        <label>Email</label>
        <div class="controls">
            <input type="email" name="email" placeholder="{{ trans('dashboard::auth/account.enter_email') }}"
                   class="form-control" required
                   value="{{ old('email') }}">

            @if ($errors->has('email'))
            <span class="form-text text-muted">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group form-group-default {{ $errors->has('password') ? ' has-error' : '' }}">
        <label>パスワード</label>
        <div class="controls">
            <input type="password" name="password" placeholder="パスワード"
                   class="form-control" required>

            @if ($errors->has('パスワード'))
            <span class="form-text text-muted">
                <strong>{{ $errors->first('パスワード') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group form-group-default {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label>Confirm パスワード</label>
        <div class="controls">
            <input type="password" name="password_confirmation" placeholder="Confirm パスワード"
                   class="form-control" required>

            @if ($errors->has('password_confirmation'))
            <span class="form-text text-muted">
                <strong>{{ $errors->first('password_confirmation') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <button class="btn btn-default btn-block m-t-md" type="submit">
        <i class="icon-refresh text-xs m-r-xs"></i> Reset パスワード
    </button>
</form>
@endsection
