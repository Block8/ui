<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>@yield('title')</title>

    <!-- Laravel csrf Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @if(file_exists(public_path('css/dashboard.css')))
    <link href="{{ mix('/css/dashboard.css') }}" rel="stylesheet">
    @endif

    <link rel="stylesheet" href="/block8/ui/js/datetimepicker/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="/block8/ui/js/select2/select2.css">
    <link rel="stylesheet" href="/block8/ui/css/animate.css">
</head>
<body>
<div class="layout">
    <div class="sidebar">
        <a class="logo" href="/">
            @isset($logo)
            <img src="{{ $logo }}" alt="{{ getenv('APP_NAME') }}">
            @else
            {{ getenv('APP_NAME') }}
            @endisset
        </a>

        @if(Auth::user())
        <div class="user">
            <a data-toggle="collapse" href="#userNavigation">
                @if(!empty(Auth::user()->photo))
                    <img class="img-circle" src="{{ Auth::user()->photo }}">
                @endif

                {{ Auth::user()->name }}
            </a>

            <div class="collapse" id="userNavigation" aria-expanded="false">
                <ul class="nav">
                    @yield('user-navigation')
                    <li>
                        @component('ui::forms.form', ['route' => route('logout'), 'method' => 'POST'])
                            <button><i class="fas fa-fw fa-sign-out-alt"></i> Logout</button>
                        @endcomponent
                    </li>
                </ul>
            </div>
        </div>
        @endif

        <div class="sidebar-content">
            <ul class="fa-ul">
                @yield('sidebar')
            </ul>
        </div>
    </div>

    <div class="main">
        <button class="sidebar-toggle"><i class="fa fa-bars"></i></button>
        <h1>@yield('title')</h1>

        <div class="content">
            @yield('alerts')
            @yield('content')
        </div>
    </div>
</div>

<!-- Scripts -->
@if(file_exists(public_path('fa/js/fontawesome-all.js')))
    <script defer src="/fa/js/fontawesome-all.js"></script>
@else
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
@endif

<script src="/block8/ui/js/jquery.min.js"></script>
<script src="/block8/ui/js/moment.min.js"></script>
<script src="/block8/ui/js/bootstrap-notify.min.js"></script>
<script src="/block8/ui/js/select2/select2.js"></script>
<script src="/block8/ui/js/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="/block8/ui/js/sweetalert2/sweetalert2.all.min.js"></script>
<script src="/block8/ui/js/chartist/chartist.min.js"></script>
<script src="/block8/ui/js/ckeditor5/ckeditor.js"></script>




<script src="{{ mix('/block8/ui/js/ui.js') }}"></script>



@if(file_exists(public_path('js/dashboard.js')))
    <script src="{{ mix('/js/dashboard.js') }}"></script>
@endif

@stack('scripts')

<script>
    function initMap() {
        $('.material-map').each(function () {
            var $el = $(this);
            var mapData = {};

            if ($el.data('zoom')) {
                mapData.zoom = $el.data('zoom');
            }

            if ($el.data('center')) {
                mapData.center = $el.data('center');
            }

            var map = new google.maps.Map(document.getElementById($el.attr('id')), mapData);

            if (markers = $el.data('markers')) {
                for (var idx in markers) {
                    var marker = new google.maps.Marker({
                        position: markers[idx],
                        map: map
                    });
                }
            }

            $el.trigger('material:map-loaded', [map])
        });
    }


    $.notifyDefaults({
        icon: 'fa-info',
        timer: 2500,
        type: 'info',
        icon_type: 'class',
        placement: {
            from: 'top',
            align: 'right'
        },
        template: '<div data-notify="container" class="alert-overlay alert alert-with-icon alert-{0}" role="alert">' +
        '<i data-notify="icon" class="fas"></i> ' +
        '<span data-notify="title">{1}</span> ' +
        '<span data-notify="message">{2}</span>' +
        '</div>'
    });
    

    $(document).ready(function () {
        @if(session('success'))
        $.notify({icon: "fa-check", message: '{{ session('success') }}' }, { type: 'success' });
        @endif

        @if(session('error'))
        $.notify({icon: "fa-exclamation-triangle", message: '{{ session('error') }}' }, { type: 'danger' });
        @endif

        @if($errors->any())
        @foreach($errors->all() as $error)
        $.notify({icon: "fa-exclamation-triangle", message: '{{ $error }}' }, { type: 'danger' });
        @endforeach
        @endif
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQanDqoNnzC5kouCf7g3bhRof75qNCOuM&callback=initMap&libraries=drawing,places" async defer></script>

</body>
</html>
