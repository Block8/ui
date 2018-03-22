<div class="checkbox">
    <label>
        <input type="checkbox" name="{{ $name }}" class="{{ $class or '' }}" value="{{ $value or 1 }}" @if(isset($checked) && $checked) checked @endif> {{ $label }}
    </label>
</div>