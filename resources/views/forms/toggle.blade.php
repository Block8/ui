<div class="togglebutton">
    <label>
        <input type="checkbox" name="{{ $name }}" class="{{ $class or '' }}" {{ isset($checked) && $checked ? 'checked' : '' }}> {{ $label }}
    </label>
</div>