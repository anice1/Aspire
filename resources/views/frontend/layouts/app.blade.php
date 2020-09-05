<!Doctype html>
<html class="no-js" lang="">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ASPIRESUTIES | HOME</title>
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
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        <!-- Flaticon CSS -->
        <link rel="stylesheet" href="{{asset('fonts/flaticon.css')}}">
        <!-- Full Calender CSS -->
        <link rel="stylesheet" href="{{asset('css/fullcalendar.min.css')}}">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="{{asset('css/animate.min.css')}}">
        <!-- Materialize  CSS -->
        <link rel="stylesheet" href="{{asset('css/materialize.css')}}">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
         <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">     
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">   
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
        <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
        <!-- Modernize js -->
        <script src="{{asset('js/modernizr-3.6.0.min.js')}}"></script>
        <!-- Plugins js -->
        <script src="{{asset('js/plugins.js')}}"></script>
        <!-- Popper js -->
        <script src="{{asset('js/popper.min.js')}}"></script>
        <!-- Bootstrap js -->
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <!-- Counterup Js -->
        <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
        <!-- Moment Js -->
        <script src="{{asset('js/moment.min.js')}}"></script>
        <!-- Waypoints Js -->
        <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
        <!-- Scroll Up Js -->
        <script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
        <!-- Full Calender Js -->
        <script src="{{asset('js/fullcalendar.min.js')}}"></script>
        <!-- Chart Js -->
        <script src="{{asset('js/Chart.min.js')}}"></script>
        <!-- Custom Js -->
        <script src="{{asset('js/main.js')}}"></script>
        <!-- Text Js -->
        <script src="{{asset('js/text.js')}}"></script>
</body>
</html>
