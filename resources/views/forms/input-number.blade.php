<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $id or $name }}" class="control-label {{ $class or '' }}">{{ $label }}</label>
    <input id="{{ $id or $name }}" name="{{ $name }}" type="number" @isset($step) step="{{ $step }}" @endisset @isset($min) min="{{ $min }}" @endisset @isset($max) max="{{ $max }}" @endisset
    class="form-control" value="{{ old($name, $value ?? '') }}" {{ isset($required) && $required ? 'required' : '' }}>

    @if ($errors->has($name))
        <div class="form-error text-danger">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>