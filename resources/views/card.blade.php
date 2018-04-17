<div class="card {{ $class or '' }} {{ !empty($icon) || !empty($image) ? 'with-icon' : '' }}">
    @isset($icon)
    <div class="icon bg-{{ $color or 'primary' }}">
        <i class="fa-fw fas fa-{{ $icon }}"></i>
    </div>
    @endisset

    @isset($image)
        <div class="image bg-{{ $color or 'primary' }}">
            <img src="{{ $image }}">
        </div>
    @endisset

    @isset($title)
    <h3>{{ $title }} @if(!empty($subtitle))- <span>{{ $subtitle }}</span>@endif</h3>
    @endisset

    <div class="card-content">
        {{ $slot }}
    </div>
</div>