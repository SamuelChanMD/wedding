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
<link href='{!! asset("/css/wedding.css")!!}' rel='stylesheet'>
<link href='{!! asset("/css/animate.css")!!}' rel='stylesheet'>

<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

</head>
<body>
	@yield('content')

<!-- JS -->
<script type='text/javascript' src='{!! asset("/js/jquery-1.9.1.min.js")!!}'></script>
<script type='text/javascript' src='{!! asset("/bootstrap/js/bootstrap.min.js")!!}'></script>
<script type='text/javascript' src='{!! asset("/js/main.js")!!}'></script>

<script>
$( document ).ready(function() {


    $('.hiddenUntilAttending').hide();
    $('.hiddenUntilChild').hide();
    $('.hiddenUntilNotChild').hide();
    $('.hiddenUntilNotDirectInvitation').hide();

    $('input[name="attending"]').click(function(eventObj){
        var obj = eventObj.target;

        if(obj.id === 'attending1'){
            $('.hiddenUntilAttending').show();
        } else {
            $('.hiddenUntilAttending').hide();
        }
    });

    $('input[name="isKid"]').click(function(eventObj){
        var obj = eventObj.target;

        if(obj.id === 'isKid1'){
            $('.hiddenUntilChild').show();
            $('.hiddenUntilNotChild').hide();
        } else {
            $('.hiddenUntilChild').hide();
            $('.hiddenUntilNotChild').show();
        }
    });

    $('input[name="receivedDirectInvitation"]').click(function(eventObj){
        var obj = eventObj.target;

        if(obj.id === 'receivedDirectInvitation1'){
            $('.hiddenUntilNotDirectInvitation').hide();
        } else {
            $('.hiddenUntilNotDirectInvitation').show();
        }
    });
});
</script>


</body>


</html>