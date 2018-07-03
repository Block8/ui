<div class="alert-banner bg-{{ $type ?? 'warning' }}-muted">
    <i class="fa fa-{{ $icon ?? 'exclamation-triangle' }}"></i>

    {{ $slot }}
</div>