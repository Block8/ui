<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $id or $name }}" class="control-label">{{ $label }}</label>

    <textarea id="{{ $id or $name }}" name="{{ $name }}" class="form-control {{ $class or '' }}" @isset($rows) rows="{{ $rows }}" @endisset {{ isset($required) && $required ? 'required' : '' }}>{{ old($name, $value ?? '') }}</textarea>

    @if ($errors->has($name))
        <div class="form-error text-danger">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>