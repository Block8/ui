<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $id or $name }}" class="control-label">{{ $label }}</label>

    <select id="{{ $id or $name }}" class="form-control {{ $class or '' }}" name="{{ $name }}" {{ isset($required) && $required ? 'required' : '' }}>
        <option></option>

        @if(isset($options))
            @foreach($options as $key => $label)
                <option value="{{ $key }}" {{ old($name, $value ?? null) == $key ? 'selected' : ''}}>{{ $label }}</option>
            @endforeach
        @endif
    </select>

    @if ($errors->has($name))
        <span class="help-block">
            <strong>{{ $errors->first($name) }}</strong>
        </span>
    @endif
</div>