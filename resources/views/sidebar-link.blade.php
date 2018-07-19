<li class="{{ $active ?? false ? 'active' : '' }}">
    <a href="{{ $url ?? route($route) }}">
        <i class="fa-fw fa-lg fas fa-{{ $icon }}"></i>
        {{ $title }}

        @if(!empty($count))
            <span class="count">{{ $count }}</span>
        @endif
    </a>
</li>