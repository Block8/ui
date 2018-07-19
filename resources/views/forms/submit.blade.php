<button type="submit" class="btn {{ $class ?? 'btn-success' }}" {{ isset($disabled) && $disabled ? 'disabled' : '' }}>
    @isset($icon)
        <i class="fas fa-{{ $icon }}"></i>
    @endisset

    {{ $label ?? 'Submit' }}
</button>