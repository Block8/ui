<div class="card card-stats with-icon">
    <div class="icon bg-{{ $color or 'primary' }}">
        <i class="fa-fw fas fa-{{ $icon or 'info-circle' }}"></i>
    </div>

    <dt class="title">{{ $title }}</dt>
    <dd class="value">{!! $value !!}</dd>
</div>