<div class="card card-stats with-icon">
    <div class="icon bg-{{ $color ?? 'primary' }}">
        <i class="fa-fw fas fa-{{ $icon ?? 'info-circle' }}"></i>
    </div>

    <dt class="title">{{ $title }}</dt>
    <dd class="value">{!! $value !!}</dd>
</div>