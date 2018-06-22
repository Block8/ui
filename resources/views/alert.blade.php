<div class="alert alert-overlay alert-{{ $type ?? 'warning' }} alert-with-icon">
    <i class="fas fa-{{ $icon ?? 'exclamation-triangle' }}"></i>

    {{ $slot }}

    <div class="close-icon">
        <button type="button" id="alert-1" class="btn-icon alert-close"><i class="fas fa-times"></i></button>
    </div>
</div>