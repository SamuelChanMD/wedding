<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href='{!! asset("/bootstrap/css/bootstrap.min.css")!!}' rel='stylesheet'>
    <link href='{!! asset("/css/base.css")!!}' rel='stylesheet'>
    <link href='{!! asset("/css/animate.css")!!}' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <style>
    html,
    body {
        background-color: #eee;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }
    </style>
</head>

<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h2>
                @yield('message')
            </h2>
            <p>Navigate back to
                <a href="http://www.samandsarah2018.com">SamAndSarah2018</a>
            </p>
        </div>
    </div>
    </div>
</body>


</html>