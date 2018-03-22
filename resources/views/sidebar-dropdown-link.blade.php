<li class="{{ $active or false ? 'active' : '' }}">
    <a href="{{ route($route) }}">
        <span class="sidebar-normal">{{ $title }}</span>
    </a>
</li>