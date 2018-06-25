<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $id or $name }}" class="control-label">{{ $label }}</label>

    <textarea id="{{ $id or $name }}" name="{{ $name }}" class="form-control html-editor" @isset($uploadUrl) data-upload="{{ $uploadUrl }}" @endisset>{!! old($name, $value ?? '') !!}</textarea>

    @if ($errors->has($name))
        <div class="form-error text-danger">
            {{ $errors->first($name) }}
        </div>
    @endif
</div>