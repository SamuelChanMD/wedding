<!DOCTYPE html>
<html lang='en'>

<head>
    <title>@yield('title')</title>
    <!--Meta Tags-->
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--CSS-->
    <link href='{!! asset("/bootstrap/css/bootstrap.min.css")!!}' rel='stylesheet'>
    <link href='{!! asset("/css/base.css")!!}' rel='stylesheet'>
    <link href='{!! asset("/css/animate.css")!!}' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link rel="icon" href='{!! asset("/images/ss.ico")!!}'>
</head>

<body>
    @yield('content')
    <!-- JS -->
    <script type='text/javascript' src='{!! asset("/js/jquery-1.9.1.min.js")!!}'></script>
    <script type='text/javascript' src='{!! asset("/bootstrap/js/bootstrap.min.js")!!}'></script>
    <script type='text/javascript' src='{!! asset("/js/wow.js")!!}'></script>
    <script type='text/javascript' src='{!! asset("/js/home.js")!!}'></script>
    <script type='text/javascript' src='{!! asset("/js/rsvp.js")!!}'></script>
    <div id="loading-container">
        <div id="loading"></div>
    </div>
</body>

</html>