<div class="social-auth-links text-center">
    <p>{{ trans('message.siginSocial') }}</p>
    <a href="{{ url('/oauth/twitter') }}" class="btn btn-block btn-social btn-twitter btn-flat"><i class="fa fa-twitter"></i> {{ trans('message.signTwitter') }}</a>
    <a href="{{ url('/oauth/facebook') }}" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> {{ trans('message.signFacebook') }}</a>
    <a href="{{ url('/oauth/line') }}" class="btn btn-block btn-social btn-linkedin btn-flat"><i class="fa fa-linkedin"></i> {{ trans('message.signLine') }}</a>
</div>