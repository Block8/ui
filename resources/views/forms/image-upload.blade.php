<div class="form-group image-upload {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $key }}" class="control-label">{{ $label }}</label>
    <input id="{{ $key }}" name="{{ $key }}" type="file" {{ isset($required) && $required ? 'required' : '' }}>

    @if ($errors->has($name))
        <span class="help-block">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif

    @isset($image)
        <img src="{{ $image }}">
    @endisset
</div>