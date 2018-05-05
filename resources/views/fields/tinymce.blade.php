<div class="form-group{{ $errors->has($oldName) ? ' has-error' : '' }}">

     @if(isset($title))
        <label for="{{$id}}">{{$title}}</label>
    @endif

    <div class="tinymce-{{$id}} b wrapper" style="min-height: 300px">
      {!! $value !!}
    </div>

     <input type="hidden" @include('dashboard::partials.fields.attributes', ['attributes' => $attributes])>

    @if(isset($help))
        <p class="form-text text-muted">{{$help}}</p>
    @endif
</div>
@include('dashboard::partials.fields.hr', ['show' => $hr ?? true])

@push('scripts')
    <script>
document.addEventListener('turbolinks:load', function() {
    dashboard.fields.tinymce.init("{{$id}}","{{$theme or 'inlite'}}");
});
</script>
@endpush
















