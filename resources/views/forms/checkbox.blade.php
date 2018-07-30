<div class="form-group">
    <div class="checkbox">
        <label>
            <input type="checkbox"
                   name="{{ $name }}"
                   class="{{ $class ?? '' }}"
                   value="{{ $value ?? 1 }}"
                   {{ isset($checked) && $checked ? 'checked' : '' }}
                   {{ isset($required) && $required ? 'required' : '' }}
                   {{ isset($disabled) && $disabled ? 'disabled' : '' }}
            > {{ $label }}
        </label>
    </div>
</div>