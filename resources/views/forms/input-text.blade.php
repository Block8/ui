<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $id ?? $name }}" class="control-label">{{ $label }}</label>
    <input id="{{ $id ?? $name }}"
           name="{{ $name }}"
           type="{{ $type ?? 'text' }}"
           placeholder="{{ $placeholder ?? '' }}"
           class="form-control {{ $class ?? '' }}"
           value="{{ old($name, $value ?? '') }}"
            {{ isset($required) && $required ? 'required' : '' }}
            {{ isset($readOnly) && $readOnly ? 'readonly' : '' }}
            {{ isset($disabled) && $disabled ? 'disabled' : '' }}
    >

    @if ($errors->has($name))
        <div class="form-error text-danger">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>