<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $id ?? $name }}" class="control-label">{{ $label }}</label>
    <select multiple id="{{ $id ?? $name }}"
            name="{{ $name }}"
            class="form-control {{ $class ?? '' }}"
            {{ isset($required) && $required ? 'required' : '' }}
            {{ isset($disabled) && $disabled ? 'disabled' : '' }}
    >
        <option></option>
        @if(isset($options))
            @foreach($options as $key => $label)
                @php
                    $values = old($name, $value ?? []);
                    $selected = false;

                    if (is_array($values)) {
                        $selected = in_array($key, $values);
                    }
                    elseif ($values instanceof \Illuminate\Support\Collection) {
                        $selected = $values->contains($key);
                    }
                @endphp
                <option value="{{ $key }}" {{ $selected ? 'selected' : ''}}>{{ $label }}</option>
            @endforeach
        @endif
    </select>
    @if($errors->has($name))
        <span class="help-block"> <strong>{{ $errors->first($name) }}</strong> </span>
    @endif
</div>