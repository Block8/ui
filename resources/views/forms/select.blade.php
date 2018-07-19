<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $id ?? $name }}" class="control-label">{{ $label }}</label>

    <select id="{{ $id ?? $name }}"
            class="form-control {{ $class ?? '' }}"
            name="{{ $name }}"
            {{ isset($required) && $required ? 'required' : '' }}
            {{ isset($disabled) && $disabled ? 'disabled' : '' }}
    >
        <option></option>

        @if(isset($options))
            @foreach($options as $key => $label)
                <option value="{{ $key }}" {{ old($name, $value ?? null) == $key ? 'selected' : ''}}>{{ $label }}</option>
            @endforeach
        @endif
    </select>

    @if ($errors->has($name))
        <div class="form-error text-danger">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>