<li class="{{ $active or false ? 'active' : '' }}">
    <a data-toggle="collapse" href="#{{ preg_replace('/([^a-zA-Z0-9]+)/', '_', $title) }}" class="" aria-expanded="{{ $active or false ? 'true' : '' }}">
        <i class="fa-fw fa-lg fas fa-{{ $icon }}"></i>
        {{ $title }} <b class="caret"></b>
    </a>

    <div class="collapse {{ $active or false ? 'in' : '' }}" id="{{ preg_replace('/([^a-zA-Z0-9]+)/', '_', $title) }}" aria-expanded="{{ $active or false ? 'true' : '' }}" style="">
        <ul class="nav">
            {{ $slot }}
        </ul>
    </div>
</li>