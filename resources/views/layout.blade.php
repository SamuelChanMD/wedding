<!DOCTYPE html>
<html lang='en'>
<head>
<title>@yield('title')</title> 

<!--Meta Tags-->
<meta charset='utf-8'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--CSS-->
<link href='{!! asset('/bootstrap/css/bootstrap.min.css')!!}' rel='stylesheet'>
<link href='{!! asset('/css/wedding.css')!!}' rel='stylesheet'>
<link href='{!! asset('/css/banner.css')!!}' rel='stylesheet'>
<link href='{!! asset('/css/animate.css')!!}' rel='stylesheet'>
</head>
<body>
	@yield('content')
</body>
</html>