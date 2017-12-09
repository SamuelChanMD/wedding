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
	var lastResponse;
	var firstSuccess;

$( document ).ready(function() {

	$('.alert').hide();
    $('.hiddenUntilAttending').hide();
    $('.second-rsvp-form-div').hide();

	$('#rsvpForm').submit(function(event){
		event.preventDefault();
		var data = $(this).serialize();
		var url = $(this).attr('action');

		$.ajax({
			method: "get",
			url: url,
			data: data,
			error: function( jqXHR, textStatus, errorThrown ){
				$('.alert').hide();

				var response = JSON.parse(jqXHR.responseText);
				for(var errorTitle in response.errors){
					$('#alert-error').append("<li>" + response.errors[errorTitle] + "</li>");
				}
				$('#alert-error').show();
			},
			success: function(response){
				$('.alert').hide();

				if(response.error){
					$('#alert-error').html("<p>" + response.error + "</p>");
					$('#alert-error').show();
					return;
				} 

				if (response.success){
					$('.first-rsvp-form-div').fadeOut(1000, function(){
						$(this).hide();
					});

					$('#invitorFirstName').val(response.invitorFN);
					$('#invitorLastName').val(response.invitorLN);
					$('#alert-success').append("<p>" + response.success + "</p>");
					$('#alert-success').append("<p>You can invite another!</p>");

					$('#alert-success').delay(900).fadeIn(1000, function(){
						$(this).show();
					});


					$('.second-rsvp-form-div').delay(900).fadeIn(1000, function(){
						$(this).show();
					});

				}

			}
		});
	});

	$('#rsvpForm2').submit(function(event){
		event.preventDefault();
		var data = $(this).serialize();
		var url = $(this).attr('action');

		$.ajax({
			method: "get",
			url: url,
			data: data,
			error: function( jqXHR, textStatus, errorThrown ){
				$('.alert').hide();

				var response = JSON.parse(jqXHR.responseText);
				for(var errorTitle in response.errors){
					$('#alert-error').append("<li>" + response.errors[errorTitle] + "</li>");
				}
				$('#alert-error').show();
			},
			success: function(response){
				$('.alert').hide();

				if(response.error){
					$('#alert-error').html("<p>" + response.error + "</p>");
					$('#alert-error').show();
					return;
				} 

				if (response.success){
					$('#invitorFirstName').val(response.invitorFN);
					$('#invitorLastName').val(response.invitorLN);

					$('#alert-success').empty();
					$('#alert-success').append("<p>" + response.success + "</p>");
					$('#alert-success').append("<p>You can invite another again!</p>");
					$('#alert-success').show();
				}

			}
		});
	});

    $('input[name="attending"]').click(function(eventObj){
        var obj = eventObj.target;

        if(obj.id === 'attending1'){
            $('.hiddenUntilAttending').show();
        } else {
            $('.hiddenUntilAttending').hide();
        }
    });
});
</script>

</body>
</html>