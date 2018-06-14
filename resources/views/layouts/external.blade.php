<!doctype html>
<html class="external" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>{{ config('app.name') }}</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />

        <link href="{{ mix('/css/dashboard.css') }}" rel="stylesheet" />
    </head>
    <body  style="background: url({{ !empty($background) ? $background : '/block8/ui/img/trees.jpeg' }}) no-repeat top center; background-size: cover;">

        @isset($logo)
            <div class="logo">
                <img src="{{ $logo }}">
            </div>
        @endisset

        @yield('content')

        @if(file_exists(public_path('fa/js/fontawesome-all.js')))
            <script defer src="/fa/js/fontawesome-all.js"></script>
        @else
            <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
        @endif
    </body>
</html>
