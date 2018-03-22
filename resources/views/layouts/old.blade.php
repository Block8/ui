<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <link rel="apple-touch-icon" sizes="76x76" href="/block8/material/img/apple-icon.png">
        <link rel="icon" type="image/png" href="{{ $favIcon or '/block8/material/img/favicon.png' }}">


        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


        <title>@yield('title')</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'>
        <meta name="viewport" content="width=device-width">

        <!-- Laravel csrf Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Bootstrap core CSS     -->
        <link href="/block8/material/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet">

        <!--  Material Dashboard CSS    -->
        <link href="/block8/material/css/material-dashboard.css" rel="stylesheet">
        @if(file_exists(public_path('css/dashboard.css')))
        <link href="/css/dashboard.css" rel="stylesheet">
        @endif

        <!--     Fonts     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar" data-active-color="{{ env('MATERIAL_COLOR') }}" data-background-color="black" data-image="/block8/material/img/sidebar-1.jpg">
                <div class="logo">
                    @if(!empty($smallBrand))
                    <a href="/" class="simple-text logo-mini">{{ $smallBrand }}</a>
                    @endif

                    <a href="/" class="simple-text logo-normal">{!! $largeBrand or 'Dashboard' !!}</a>
                </div>

                <div class="sidebar-wrapper">
                    <div class="user">
                        @if(!empty(Auth::user()->photo))
                            <div class="photo">
                                <img src="{{ Auth::user()->photo }}">
                            </div>
                        @endif

                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" class="collapsed" aria-expanded="false">
                            <span>
                                {{ Auth::user()->name }}
                                <b class="caret"></b>
                            </span>
                            </a>
                            <div class="clearfix"></div>
                            <div class="collapse" id="collapseExample" aria-expanded="false" style="height: 0px;">
                                <ul class="nav">
                                    @yield('user-navigation')
                                </ul>
                            </div>
                        </div>
                    </div>

                    <ul class="nav">
                        @yield('sidebar')
                    </ul>
                </div>
            </div>
            <div class="main-panel">
                <nav class="navbar navbar-transparent navbar-absolute">
                    <div class="container-fluid">
                        <div class="navbar-minimize">
                            <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                                <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                                <i class="material-icons visible-on-sidebar-mini">view_list</i>
                            </button>
                        </div>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">@yield('title')</a>
                        </div>

                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                @yield('navbar-items')

                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                        <i class="material-icons">person</i>
                                        <p class="hidden-lg hidden-md">Profile</p>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <li class="separator hidden-lg hidden-md"></li>
                            </ul>

                            @isset($searchUri)
                            <form method="GET" action="{{ $searchUri }}" class="navbar-form navbar-right" role="search">
                                <div class="form-group form-search is-empty">
                                    <input name="q" type="text" class="form-control" placeholder="Search customers">
                                    <span class="material-input"></span>
                                </div>
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </form>
                            @endisset
                        </div>
                    </div>
                </nav>
                <div class="content">
                    <div class="container-fluid">
                        @yield('alerts')
                        @yield('content')
                    </div>
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <p class="copyright pull-right">
                            System Developed by <a href="https://block8.digital" target="_blank">Block 8 Digital</a>.
                        </p>
                    </div>
                </footer>
            </div>
        </div>
    </body>



    <!--   Core JS Files   -->
    <script src="/block8/material/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="/block8/material/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/block8/material/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/block8/material/js/material.min.js" type="text/javascript"></script>
    <script src="/block8/material/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
    <!-- Forms Validations Plugin -->
    <script src="/block8/material/js/jquery.validate.min.js"></script>
    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="/block8/material/js/moment.min.js"></script>
    <!--  Charts Plugin -->
    <script src="/block8/material/js/chartist.min.js"></script>
    <!--  Plugin for the Wizard -->
    <script src="/block8/material/js/jquery.bootstrap-wizard.js"></script>
    <!--  Notifications Plugin    -->
    <script src="/block8/material/js/bootstrap-notify.js"></script>
    <!-- DateTimePicker Plugin -->
    <script src="/block8/material/js/bootstrap-datetimepicker.js"></script>
    <!-- Vector Map plugin -->
    <script src="/block8/material/js/jquery-jvectormap.js"></script>
    <!-- Sliders Plugin -->
    <script src="/block8/material/js/nouislider.min.js"></script>
    <!-- Select Plugin -->
    <script src="/block8/material/js/jquery.select-bootstrap.js"></script>
    <!--  DataTables.net Plugin    -->
    <script src="/block8/material/js/jquery.datatables.js"></script>
    <!-- Sweet Alert 2 plugin -->
    <script src="/block8/material/js/sweetalert2.js"></script>
    <!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="/block8/material/js/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin    -->
    <script src="/block8/material/js/fullcalendar.min.js"></script>
    <!-- TagsInput Plugin -->
    <script src="/block8/material/js/jquery.tagsinput.js"></script>
    <!-- Material Dashboard javascript methods -->
    <script src="/block8/material/js/material-dashboard.js"></script>

    <script src="/block8/material/js/app.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
    <script src="/block8/material/js/ckeditor/ckeditor.js"></script>
    <script src="/block8/material/js/ckeditor/adapters/jquery.js"></script>

    @if(file_exists(public_path('js/dashboard.js')))
    <script src="/js/dashboard.js"></script>
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
    </script>

    <!-- Material Notification Alerts -->
    <script>
        function showSuccess(message){
            $.notify({
                icon: "check",
                message: message

            },{
                type: 'success',
                timer: 3500,
                placement: {
                    from: 'top',
                    align: 'right'
                }
            });
        }

        function showAlert(message){
            $.notify({
                icon: "warning",
                message: message

            },{
                type: 'danger',
                timer: 3500,
                placement: {
                    from: 'top',
                    align: 'right'
                }
            });
        }

        $(document).ready(function () {
            @if(session('success'))
            var success = "{{ session('success') }}";
            showSuccess(success);
            @endif

            @if(session('error'))
            var error = "{{ session('error') }}";
            showAlert(error);
            @endif

            @if($errors->any())
            @foreach($errors->all() as $error)
            var alert = "{{ $error }}";
            showAlert(alert);
            @endforeach
            @endif
        });
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDQanDqoNnzC5kouCf7g3bhRof75qNCOuM&callback=initMap&libraries=drawing,places" async defer></script>
</html>