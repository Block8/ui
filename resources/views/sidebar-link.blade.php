<li class="{{ $active or false ? 'active' : '' }}">
    <a href="{{ $url or route($route) }}">
        <i class="fa-fw fa-lg fas fa-{{ $icon }}"></i>
        {{ $title }}
    </a>
</li>