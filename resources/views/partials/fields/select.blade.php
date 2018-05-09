<div class="form-group{{ $errors->has($oldName) ? ' has-error' : '' }}">
    @if(isset($title))
        <label for="{{$id}}">{{$title}}</label>
    @endif
    <select @include('partials.components.attributes', ['attributes' => $attributes])>
        @foreach($options as $key => $option)
            <option value="{{$key}}"
                    @if(isset($value) && $key === $value) selected @endif
            >{{$option}}</option>
        @endforeach
    </select>
    @if(isset($help))
        <p class="help-block">{{$help}}</p>
    @endif
</div>
@include('partials.components.hr', ['show' => $hr ?? true])
