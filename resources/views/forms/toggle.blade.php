<div class="togglebutton">
    <label>
        <input type="checkbox" name="{{ $name }}" class="{{ $class ?? '' }}" {{ isset($checked) && $checked ? 'checked' : '' }}> {{ $label }}
    </label>
</div>