<li class="{{ $active or false ? 'active' : '' }}">
    <a href="{{ $url or route($route) }}">
        <span class="sidebar-normal">{{ $title }}</span>
    </a>
</li>