<li class="{{ $active ?? false ? 'active' : '' }}">
    <a href="{{ $url ?? route($route) }}">
        <span class="sidebar-normal">{{ $title }}</span>
    </a>
</li>