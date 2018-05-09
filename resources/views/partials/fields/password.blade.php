<div class="form-group{{ $errors->has($oldName) ? ' has-error' : '' }}">
    @if(isset($title))
        <label for="field-{{$slug}}">{{$title}}</label>
    @endif
    <input @include('partials.components.attributes', ['attributes' => $attributes])
           @if(isset($required) && $required) required @endif
    >
    @if(isset($help))
        <p class="form-text text-muted">{{$help}}</p>
    @endif
</div>
@include('partials.components.hr', ['show' => $hr ?? true])
