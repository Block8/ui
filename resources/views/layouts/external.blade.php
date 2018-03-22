<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/block8/material/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="/block8/material/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ env('APP_NAME') }}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="/block8/material/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="/block8/material/css/material-dashboard.css?v=1.2.1" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/block8/material/css/demo.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body  style="background: url({{ !empty($background) ? $background : '/block8/material/img/bg-pricing.jpeg' }}) no-repeat top center; background-size: cover;">
<div class="wrapper wrapper-full-page">
    <div class="login-page">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="/block8/material/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="/block8/material/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/block8/material/js/material.min.js" type="text/javascript"></script>
<script src="/block8/material/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<script src="/block8/material/js/material-dashboard.js"></script>

<script type="text/javascript">
    $().ready(function() {
        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

@stack('scripts')

</html>