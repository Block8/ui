<form class="form" method="POST" action="{{ $route or '' }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    @isset($method)
        {{ method_field($method) }}
    @endisset

    {{ $slot }}
</form>