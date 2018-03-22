<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $id or $name }}" class="control-label">{{ $label }}</label>
    <input id="{{ $id or $name }}" name="{{ $name }}" type="{{ $type or 'text' }}" class="form-control {{ $class or '' }}" value="{{ old($name, $value ?? '') }}" {{ isset($required) && $required ? 'required' : '' }}>

    @if ($errors->has($name))
        <span class="help-block">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>