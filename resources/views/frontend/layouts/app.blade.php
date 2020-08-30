<!Doctype html>
<html class="no-js" lang="">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ASPIRECREED | HOME</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
        <!-- Normalize CSS -->
        <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
        <!-- Main CSS -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="css/all.min.css">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="fonts/flaticon.css">
        <!-- Full Calender CSS -->
        <link rel="stylesheet" href="css/fullcalendar.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Materialize  CSS -->
        <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
        <!-- Google Fonts -->
        <link href="https://www/fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://www/fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        <!-- Bootstrap Core Css -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Modernize js -->
        <script src="js/modernizr-3.6.0.min.js"></script>
    </head>

    <body>
        @include('frontend.inc.preloader')
        <div id="wrapper" class="wrapper bg-ash">
            @include('frontend.inc.header')
            <div class="dashboard-page-one">
                @include('frontend.inc.sidebar')
                @yield('content')
            </div>
        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <!-- Plugins js -->
        <script src="js/plugins.js"></script>
        <!-- Popper js -->
        <script src="js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Counterup Js -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Moment Js -->
        <script src="js/moment.min.js"></script>
        <!-- Waypoints Js -->
        <script src="js/jquery.waypoints.min.js"></script>
        <!-- Scroll Up Js -->
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- Full Calender Js -->
        <script src="js/fullcalendar.min.js"></script>
        <!-- Chart Js -->
        <script src="js/Chart.min.js"></script>
        <!-- Custom Js -->
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
