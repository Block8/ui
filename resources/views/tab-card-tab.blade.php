<li class="tab {{ $active or false ? 'active' : '' }}">
    <a href="#{{ $panel }}">
        @isset($icon)
        <i class="fa-fw fa-lg fas fa-{{ $icon }}"></i>
        @endisset

        {{ $slot }}
    </a>
</li>