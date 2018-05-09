<div class="form-group{{ $errors->has($oldName) ? ' has-error' : '' }}">
    @if(isset($title))
        <label for="{{$id}}">{{$title}}</label>
    @endif
    <input @include('partials.components.attributes', ['attributes' => $attributes]) data-mask="{{$mask or ''}}">
    @if(isset($help))
        <p class="form-text text-muted">{{$help}}</p>
    @endif
</div>
@include('partials.components.hr', ['show' => $hr ?? true])
