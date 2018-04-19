<form class="form {{ $class ?? '' }}" method="POST" action="{{ $action ?? $route ?? '' }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    @isset($method)
        {{ method_field($method) }}
    @endisset

    {{ $slot }}
</form>