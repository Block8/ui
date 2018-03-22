<button type="submit" class="btn {{ $class or 'btn-success' }}">
    @isset($icon)
        <i class="fas fa-{{ $icon }}"></i>
    @endisset

    {{ $label or 'Submit' }}
</button>