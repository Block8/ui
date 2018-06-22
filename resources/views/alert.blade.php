<div class="alert alert-overlay alert-{{ $type ?? 'warning' }} {{ isset($icon) ? $icon ? 'alert-with-icon' : '' : '' }}">
    <i class="fas fa-{{ isset($type) ? $type == 'danger' ? 'exclamation' : 'exclamation-triangle' : 'exclamation-triangle' }}"></i>

    {{ $slot }}

    <div class="close-icon">
        <button type="button" id="alert-1" class="btn-icon alert-close"><i class="fas fa-times"></i></button>
    </div>
</div>